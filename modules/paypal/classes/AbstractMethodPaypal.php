<?php
/**
 * 2007-2020 PayPal
 *
 *  NOTICE OF LICENSE
 *
 *  This source file is subject to the Academic Free License (AFL 3.0)
 *  that is bundled with this package in the file LICENSE.txt.
 *  It is also available through the world-wide-web at this URL:
 *  http://opensource.org/licenses/afl-3.0.php
 *  If you did not receive a copy of the license and are unable to
 *  obtain it through the world-wide-web, please send an email
 *  to license@prestashop.com so we can send you a copy immediately.
 *
 *  DISCLAIMER
 *
 *  Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 *  versions in the future. If you wish to customize PrestaShop for your
 *  needs please refer to http://www.prestashop.com for more information.
 *
 *  @author 2007-2020 PayPal
 *  @author 202 ecommerce <tech@202-ecommerce.com>
 *  @copyright PayPal
 *  @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace PaypalAddons\classes;

use Context;
use Currency;
use Customer;
use Exception;
use Module;
use PayPal;
use PaypalAddons\classes\API\PaypalApiManagerInterface;
use PaypalAddons\classes\API\Response\Response;
use PaypalAddons\classes\API\Response\ResponseOrderGet;
use PaypalAddons\classes\API\Response\ResponseOrderRefund;
use PaypalAddons\classes\Shortcut\ShortcutProduct;
use PaypalAddons\classes\Shortcut\ShortcutCart;
use PaypalPPBTlib\AbstractMethod;
use Symfony\Component\VarDumper\VarDumper;
use Tools;
use Validate;

abstract class AbstractMethodPaypal extends AbstractMethod
{
    /** @var bool*/
    protected $isSandbox;

    /** @var PaypalApiManagerInterface*/
    protected $paypalApiManager;

    /**
     * @param string $method
     * @return AbstractMethodPaypal
     */
    public static function load($method = null)
    {
        if ($method == null) {
            $countryDefault = new \Country((int)\Configuration::get('PS_COUNTRY_DEFAULT'));

            switch ($countryDefault->iso_code) {
                case "DE":
                    $method = "PPP";
                    break;
                case "BR":
                    $method = "MB";
                    break;
                case "MX":
                    $method = "MB";
                    break;
                default:
                    $method = "EC";
            }
        }

        if (preg_match('/^[a-zA-Z0-9_-]+$/', $method) && file_exists(_PS_MODULE_DIR_.'paypal/classes/Method'.$method.'.php')) {
            include_once _PS_MODULE_DIR_.'paypal/classes/Method'.$method.'.php';
            $method_class = 'Method'.$method;
            return new $method_class();
        }
    }

    /**
     * @return bool
     */
    public function isSandbox()
    {
        if ($this->isSandbox !== null) {
            return $this->isSandbox;
        }

        $this->isSandbox = (bool)\Configuration::get('PAYPAL_SANDBOX');
        return $this->isSandbox;
    }

    /**
     * @return \PaypalAddons\classes\API\Response\ResponseOrderCreate
     */
    public function init()
    {
        if ($this->isConfigured() == false) {
            return '';
        }

        /** @var $response \PaypalAddons\classes\API\Response\ResponseOrderCreate*/
        $response = $this->paypalApiManager->getOrderRequest()->execute();

        if ($response->isSuccess() == false) {
            throw new \Exception($response->getError()->getMessage());
        }

        $this->setPaymentId($response->getPaymentId());

        return $response;
    }

    /**
     * @see AbstractMethodPaypal::validation()
     */
    public function validation()
    {
        $context = Context::getContext();
        $cart = $context->cart;
        $customer = new Customer($cart->id_customer);

        if (!Validate::isLoadedObject($customer)) {
            throw new Exception('Customer is not loaded object');
        }

        if ($this->getPaymentId() == false) {
            throw new Exception('Payment ID isn\'t setted');
        }

        if ($this->getIntent() == 'CAPTURE') {
            $response = $this->paypalApiManager->getOrderCaptureRequest($this->getPaymentId())->execute();
        } else {
            $response = $this->paypalApiManager->getOrderAuthorizeRequest($this->getPaymentId())->execute();
        }

        if ($response->isSuccess() == false) {
            throw new Exception($response->getError()->getMessage());
        }


        $this->setDetailsTransaction($response);
        $currency = $context->currency;
        $total = $response->getTotalPaid();
        $paypal = Module::getInstanceByName($this->name);
        $order_state = $this->getOrderStatus();
        $paypal->validateOrder($cart->id,
            $order_state,
            $total,
            $this->getPaymentMethod(),
            null,
            $this->getDetailsTransaction(),
            (int)$currency->id,
            false,
            $customer->secure_key);
    }

    /**
     * @param \PaypalAddons\classes\API\Response\ResponseOrderCapture $data
     * @return  void
     */
    public function setDetailsTransaction($data)
    {
        $transaction_detail = array(
            'method' => $data->getMethod(),
            'currency' => $data->getCurrency(),
            'payment_status' => $data->getStatus(),
            'payment_method' => $data->getPaymentMethod(),
            'id_payment' => pSQL($data->getPaymentId()),
            'payment_tool' => $data->getPaymentTool(),
            'date_transaction' => $data->getDateTransaction()->format('Y-m-d H:i:s'),
            'transaction_id' => $data->getTransactionId(),
            'capture' => $data->isCapture()
        );

        $this->transaction_detail = $transaction_detail;
    }

    /**
     * @param $paypalOrder \PaypalOrder
     * @return ResponseOrderRefund
     */
    public function refund($paypalOrder)
    {
        /** @var $response ResponseOrderRefund*/
        $response = $this->paypalApiManager->getOrderRefundRequest($paypalOrder)->execute();
        return $response;
    }

    /**
     * @param $params mixed
     * @return ResponseOrderRefund
     */
    public function partialRefund($params)
    {
        $paypalOrder = \PaypalOrder::loadByOrderId($params['order']->id);
        $amount = 0;

        foreach ($params['productList'] as $product) {
            $amount += $product['amount'];
        }

        if (\Tools::getValue('partialRefundShippingCost')) {
            $amount += \Tools::getValue('partialRefundShippingCost');
        }

        return $response = $this->paypalApiManager->getOrderPartialRefundRequest($paypalOrder, $amount)->execute();
    }

    /**
     * @return Response
     */
    public function doOrderPatch()
    {
        if ($this->isConfigured() == false) {
            return false;
        }

        return $this->paypalApiManager->getOrderPatchRequest($this->getPaymentId())->execute();
    }


    /**
     * @return ResponseOrderGet
     */
    public function getInfo($paymentId = null)
    {
        if ($paymentId === null) {
            $paymentId = $this->getPaymentId();
        }

        $response = $this->paypalApiManager->getOrderGetRequest($paymentId)->execute();
        return $response;
    }

    /**
     * Convert and format price
     * @param $price
     * @return float|int|string
     */
    public function formatPrice($price, $isoCurrency = null)
    {
        $context = Context::getContext();
        $context_currency = $context->currency;
        $paypal = Module::getInstanceByName($this->name);

        if ($id_currency_to = $paypal->needConvert()) {
            $currency_to_convert = new Currency($id_currency_to);
            $price = Tools::convertPriceFull($price, $context_currency, $currency_to_convert);
        }

        return number_format($price, Paypal::getDecimal($isoCurrency), ".", '');
    }

    /**
     * @param \PaypalLog
     * @return string
     */
    public function getLinkToTransaction($log)
    {
        if ($log->sandbox) {
            $url = 'https://www.sandbox.paypal.com/activity/payment/';
        } else {
            $url = 'https://www.paypal.com/activity/payment/';
        }
        return $url . $log->id_transaction;
    }

    /**
     * @param $cart \Cart
     * @return string additional payment information
     */
    public function getCustomFieldInformation(\Cart $cart)
    {
        $module = \Module::getInstanceByName($this->name);
        $return = $module->l('Cart ID: ',  get_class($this)) . $cart->id . '.';
        $return .= $module->l('Shop name: ',  get_class($this)) . \Configuration::get('PS_SHOP_NAME', null, $cart->id_shop);

        return $return;
    }

    public function getBrandName()
    {
        return empty(\Configuration::get('PAYPAL_CONFIG_BRAND')) == false ? \Configuration::get('PAYPAL_CONFIG_BRAND') : \Configuration::get('PS_SHOP_NAME');
    }

    protected function getUrlOnboarding()
    {
        $urlLink = '';

        if ($this->isSandbox()) {
            $urlLink .= 'https://www.sandbox.paypal.com/merchantsignup/partner/onboardingentry?';
        } else {
            $urlLink .= 'https://www.paypal.com/merchantsignup/partner/onboardingentry?';
        }

        $params = [
            'partnerClientId' => $this->isSandbox() ? \Paypal::PAYPAL_PARTNER_CLIENT_ID_SANDBOX : \Paypal::PAYPAL_PARTNER_CLIENT_ID_LIVE,
            'partnerId' => $this->isSandbox() ? \Paypal::PAYPAL_PARTNER_ID_SANDBOX : \Paypal::PAYPAL_PARTNER_ID_LIVE,
            'integrationType' => 'FO',
            'features' => 'PAYMENT,REFUND',
            'returnToPartnerUrl' => \Context::getContext()->link->getAdminLink('AdminPaypalGetCredentials'),
            'displayMode' => 'minibrowser',
            'sellerNonce' => $this->getSellerNonce(),
        ];

        return $urlLink . http_build_query($params);
    }

    /**
     * @return string
     */
    public function getSellerNonce()
    {
        if ($this->isSandbox()) {
            $id = \Paypal::PAYPAL_PARTNER_ID_SANDBOX;
        } else {
            $id = \Paypal::PAYPAL_PARTNER_ID_LIVE;
        }

        $employeeMail = \Context::getContext()->employee->email;

        return hash('sha256', $id.$employeeMail);
    }

    /**
     * @return string
     */
    public function getUrlJsSdkLib()
    {
        $paypal = \Module::getInstanceByName($this->name);

        $params = [
            'client-id' => $this->getClientId(),
            'intent' => \Tools::strtolower($this->getIntent()),
            'currency' => $paypal->getPaymentCurrencyIso(),
            'locale' => str_replace('-', '_', \Context::getContext()->language->locale)
        ];

        return 'https://www.paypal.com/sdk/js?' . http_build_query($params);
    }

    /** @return  string*/
    public function getLandingPage()
    {
        return 'LOGIN';
    }

    /**
     * @param $context
     * @param $type
     * @param $page_source
     * @return string
     */
    public function renderExpressCheckoutShortCut(Context &$context, $type, $page_source)
    {
        if ($page_source === 'product') {
            $Shortcut = new ShortcutProduct(
                (int)Tools::getValue('id_product'),
                (int)Tools::getValue('id_product_attribute')
            );
        } else {
            $Shortcut = new ShortcutCart();
        }

        return $Shortcut->render();
    }

    /** @return  string*/
    abstract public function getClientId($sandbox);

    /** @return  string*/
    abstract public function getSecret($sandbox);

    /** @return  string*/
    abstract public function getReturnUrl();

    /** @return  string*/
    abstract public function getCancelUrl();

    /** @return  string*/
    abstract public function getPaypalPartnerId();

    /** @return  string*/
    abstract public function getIntent();

    /** @return  bool*/
    abstract public function isConfigured();
}
