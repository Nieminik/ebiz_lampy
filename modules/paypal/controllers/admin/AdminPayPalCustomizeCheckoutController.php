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

require_once _PS_MODULE_DIR_ . 'paypal/vendor/autoload.php';

use PaypalAddons\classes\AdminPayPalController;
use PaypalAddons\classes\AbstractMethodPaypal;
use PaypalAddons\classes\Shortcut\Form\Definition\CustomizeButtonStyleSectionDefinition;
use PaypalAddons\classes\Shortcut\Form\Field\InputChain;
use PaypalAddons\classes\Shortcut\Form\Field\Select;
use PaypalAddons\classes\Shortcut\Form\Field\SelectOption;
use PaypalAddons\classes\Shortcut\Form\Field\TextInput;
use PaypalAddons\classes\Shortcut\ShortcutConfiguration;
use PaypalAddons\classes\Shortcut\ShortcutPreview;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminPayPalCustomizeCheckoutController extends AdminPayPalController
{
    protected $advanceFormParametres = array();

    protected $headerToolBar = true;

    protected $advancedFormErrors = array();

    public function __construct()
    {
        parent::__construct();
        $this->parametres = array(
            'paypal_express_checkout_in_context',
            'paypal_api_advantages',
            'paypal_config_brand',
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_PRODUCT_PAGE),
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_CART_PAGE),
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_SIGNUP_STEP),
            'paypal_api_card',
            'paypal_vaulting',
            'paypal_mb_ec_enabled',
            'paypal_merchant_installment',
        );

        $this->advanceFormParametres = array(
            'paypal_customize_order_status',
            'paypal_os_refunded',
            'paypal_os_canceled',
            'paypal_os_accepted',
            'paypal_os_capture_canceled',
            ShortcutConfiguration::CUSTOMIZE_STYLE,
            ShortcutConfiguration::DISPLAY_MODE_PRODUCT,
            ShortcutConfiguration::PRODUCT_PAGE_HOOK,
            ShortcutConfiguration::DISPLAY_MODE_CART,
            ShortcutConfiguration::CART_PAGE_HOOK,
            ShortcutConfiguration::DISPLAY_MODE_SIGNUP,
            ShortcutConfiguration::STYLE_LABEL_PRODUCT,
            ShortcutConfiguration::STYLE_COLOR_PRODUCT,
            ShortcutConfiguration::STYLE_SHAPE_PRODUCT,
            ShortcutConfiguration::STYLE_HEIGHT_PRODUCT,
            ShortcutConfiguration::STYLE_WIDTH_PRODUCT,
            ShortcutConfiguration::STYLE_LABEL_CART,
            ShortcutConfiguration::STYLE_COLOR_CART,
            ShortcutConfiguration::STYLE_SHAPE_CART,
            ShortcutConfiguration::STYLE_HEIGHT_CART,
            ShortcutConfiguration::STYLE_WIDTH_CART,
            ShortcutConfiguration::STYLE_LABEL_SIGNUP,
            ShortcutConfiguration::STYLE_COLOR_SIGNUP,
            ShortcutConfiguration::STYLE_SHAPE_SIGNUP,
            ShortcutConfiguration::STYLE_HEIGHT_SIGNUP,
            ShortcutConfiguration::STYLE_WIDTH_SIGNUP
        );
    }

    public function initContent()
    {
        parent::initContent();

        if ($this->module->showWarningForUserBraintree()) {
            $this->content = $this->context->smarty->fetch($this->getTemplatePath() . '_partials/messages/forBraintreeUsers.tpl');
            $this->context->smarty->assign('content', $this->content);
            return;
        }

        if ($this->method == 'MB' && $this->showCurrencyRestrictionWarning()) {
            $this->warnings[] = $this->l('The currencies supported are: MXN, BRL, USD and EUR. For changing your Currency restrictions please go to the "Payment -> Preferences" page." please add link to the "Payment -> Preferences');
        }

        $this->initForm();
        $this->context->smarty->assign('formBehavior', $this->renderForm());

        $this->clearFieldsForm();
        $this->initAdvancedForm();
        $this->context->smarty->assign('formAdvanced', $this->renderForm());

        $this->content = $this->context->smarty->fetch($this->getTemplatePath() . 'customizeCheckout.tpl');
        $this->context->smarty->assign('content', $this->content);
        Media::addJsDef(array('paypalMethod' => $this->method));
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/adminCheckout.js?v=' . $this->module->version);
    }

    public function initForm()
    {
        $tpl_vars = array(
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_PRODUCT_PAGE) => (int)Configuration::get(ShortcutConfiguration::SHOW_ON_PRODUCT_PAGE),
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_CART_PAGE) => (int)Configuration::get(ShortcutConfiguration::SHOW_ON_CART_PAGE),
            Tools::strtolower(ShortcutConfiguration::SHOW_ON_SIGNUP_STEP) => (int)Configuration::get(ShortcutConfiguration::SHOW_ON_SIGNUP_STEP),
        );

        $countryDefault = new Country((int)\Configuration::get('PS_COUNTRY_DEFAULT'), $this->context->language->id);
        $this->context->smarty->assign($tpl_vars);
        $htmlContent = $this->context->smarty->fetch($this->getTemplatePath() . '_partials/blockPreviewButtonContext.tpl');
        $this->fields_form['form']['form'] = array(
            'legend' => array(
                'title' => $this->l('Behavior'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(

            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right button',
                'name' => 'behaviorForm'
            ),
        );

        if ($this->method == 'MB') {
            $this->fields_form['form']['form']['input'][] = array(
                'type' => 'switch',
                'label' => $this->l('Accept PayPal payments'),
                'name' => 'paypal_mb_ec_enabled',
                'is_bool' => true,
                'values' => array(
                    array(
                        'id' => 'paypal_mb_ec_enabled_on',
                        'value' => 1,
                        'label' => $this->l('Enabled'),
                    ),
                    array(
                        'id' => 'paypal_mb_ec_enabled_off',
                        'value' => 0,
                        'label' => $this->l('Disabled'),
                    )
                ),
            );
        }

        $this->fields_form['form']['form']['input'][] = array(
            'type' => 'select',
            'label' => $this->l('PayPal checkout'),
            'name' => 'paypal_express_checkout_in_context',
            'hint' => $this->l('PayPal opens in a pop-up window, allowing your buyers to finalize their payment without leaving your website. Optimized, modern and reassuring experience which benefits from the same security standards than during a redirection to the PayPal website.'),
            'options' => array(
                'query' => array(
                    array(
                        'id' => '1',
                        'name' => $this->l('IN-CONTEXT'),
                    ),
                    array(
                        'id' => '0',
                        'name' => $this->l('REDIRECT'),
                    )
                ),
                'id' => 'id',
                'name' => 'name'
            )
        );

        $this->fields_form['form']['form']['input'][] = array(
            'type' => 'html',
            'label' => '',
            'name' => 'testName',
            'html_content' => $this->module->displayInformation($this->l('In-Context has shown better conversion rate'), true, false, 'message-context'),
        );

        $this->fields_form['form']['form']['input'][] = array(
            'type' => 'html',
            'label' => $this->l('PayPal Express Checkout Shortcut on'),
            'hint' => $this->l('By default, PayPal shortcut is displayed directly on your cart page. In order to improve your customers’ experience, you can enable PayPal shortcuts on other pages of your shop : product pages or/and Sign up form on order page (on the first step of checkout).
Shipping costs will be estimated on the base of the cart total and default carrier fees.'),
            'name' => '',
            'html_content' => $htmlContent
        );

        $this->fields_form['form']['form']['input'][] = array(
            'type' => 'switch',
            'label' => $this->l('Show PayPal benefits to your customers'),
            'name' => 'paypal_api_advantages',
            'is_bool' => true,
            'hint' => $this->l('You can increase your conversion rate by presenting PayPal benefits to your customers on payment methods selection page.'),
            'values' => array(
                array(
                    'id' => 'paypal_api_advantages_on',
                    'value' => 1,
                    'label' => $this->l('Enabled'),
                ),
                array(
                    'id' => 'paypal_api_advantages_off',
                    'value' => 0,
                    'label' => $this->l('Disabled'),
                )
            ),
        );

        $this->fields_form['form']['form']['input'][] = array(
            'type' => 'text',
            'label' => $this->l('Brand name shown on top left during PayPal checkout'),
            'name' => 'paypal_config_brand',
            'placeholder' => $this->l('Leave it empty to use your Shop name setup on your PayPal account'),
            'hint' => $this->l('A label that overrides the business name in the PayPal account on the PayPal pages. If logo is set, then brand name won\'t be shown.', get_class($this)),
        );

        if (in_array($countryDefault->iso_code, $this->module->countriesApiCartUnavailable) == false || $this->method == 'MB') {
            $this->fields_form['form']['form']['input'][] = array(
                'type' => 'switch',
                'label' => $this->l('Accept credit and debit card payment'),
                'name' => 'paypal_api_card',
                'is_bool' => true,
                'hint' => $this->l('Your customers can pay with debit and credit cards as well as local payment systems whether or not they use PayPal.'),
                'values' => array(
                    array(
                        'id' => 'paypal_api_card_on',
                        'value' => 1,
                        'label' => $this->l('Enabled'),
                    ),
                    array(
                        'id' => 'paypal_api_card_off',
                        'value' => 0,
                        'label' => $this->l('Disabled'),
                    )
                ),
            );
        }


        if ($this->method == 'MB') {
            $this->fields_form['form']['form']['input'][] = array(
                'type' => 'switch',
                'label' => $this->l('Enable "Remember my cards" feature'),
                'name' => 'paypal_vaulting',
                'is_bool' => true,
                'hint' => $this->l('The Vault is used to process payments so your customers don\'t need to re-enter their information each time they make a purchase from you.'),
                'values' => array(
                    array(
                        'id' => 'paypal_vaulting_on',
                        'value' => 1,
                        'label' => $this->l('Enabled'),
                    ),
                    array(
                        'id' => 'paypal_vaulting_off',
                        'value' => 0,
                        'label' => $this->l('Disabled'),
                    )
                ),
            );

            $this->fields_form['form']['form']['input'][] = array(
                'type' => 'switch',
                'label' => $this->l('Payments with installments'),
                'name' => 'paypal_merchant_installment',
                'is_bool' => true,
                'hint' => $this->l('Enable this option if you want to enable installments. If enabled, your clients will be able to change the number of installments (by default, 1x payment will be offered). This option can be available only for registered users.'),
                'values' => array(
                    array(
                        'id' => 'paypal_merchant_installment_on',
                        'value' => 1,
                        'label' => $this->l('Enabled'),
                    ),
                    array(
                        'id' => 'paypal_merchant_installment_off',
                        'value' => 0,
                        'label' => $this->l('Disabled'),
                    )
                ),
            );
        }

        $values = array();
        foreach ($this->parametres as $parametre) {
            $values[$parametre] = Configuration::get(Tools::strtoupper($parametre));
        }
        $this->tpl_form_vars = array_merge($this->tpl_form_vars, $values);
    }

    public function initAdvancedForm()
    {
        $method = AbstractMethodPaypal::load($this->method);
        $orderStatuses = $this->module->getOrderStatuses();
        $inputs = array();
        $inputsMethod = $method->getAdvancedFormInputs();

        $inputs[] = array(
            'type' => 'switch',
            'label' => $this->l('Customize PayPal Express Checkout shortcut buttons'),
            'name' => ShortcutConfiguration::CUSTOMIZE_STYLE,
            'hint' => $this->l('You can customize the display options and styles of PayPal shortcuts. The styles and display options can be changed for each button separately depending on its location (Cart Page / Product pages / Sign up step in checkout).'),
            'is_bool' => true,
            'values' => array(
                array(
                    'id' => ShortcutConfiguration::CUSTOMIZE_STYLE . '_ON',
                    'value' => 1,
                    'label' => $this->l('Enabled'),
                ),
                array(
                    'id' => ShortcutConfiguration::CUSTOMIZE_STYLE . '_OFF',
                    'value' => 0,
                    'label' => $this->l('Disabled'),
                )
            ),
        );

        $inputs[] = array(
            'type' => 'html',
            'name' => '',
            'html_content' => $this->module->displayWarning($this->l('In order to customize PayPal Express Checkout Shortcut you have to enable this feature at least for one location : Cart Page / Product pages / Sign up step in checkout.'), false, false, 'hidden shortcut-customize-style-alert')
        );

        $inputs[] = array(
            'type' => 'html',
            'name' => '',
            'html_content' => $this->context->smarty->assign(
                array(
                    'sectionTitle' => $this->l('Cart page'),
                    'attributes' => ['data-section-customize-mode-cart']
                )
            )->fetch($this->getTemplatePath() . '_partials/form/sectionTitle.tpl')
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Display mode'),
            'hint' => $this->l('By default, PayPal shortcut is displayed on your web site via PrestaShop native hook. If you choose to use PrestaShop widgets, you will be able to copy widget code and insert it wherever you want in the product template.'),
            'name' => '',
            'html_content' => $this->getDisplayModeSection(ShortcutConfiguration::DISPLAY_MODE_CART)
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Widget code'),
            'name' => '',
            'html_content' => $this->getCartPageWidgetField()
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Hook for displaying shortcut on product pages'),
            'name' => '',
            'html_content' => $this->getCartPageHookSelect()
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Current shortcut style'),
            'name' => '',
            'html_content' => $this->getCustomizeStyleSectionCart()
        );

        $inputs[] = array(
            'type' => 'html',
            'name' => '',
            'html_content' => $this->context->smarty->assign(
                array(
                    'sectionTitle' => $this->l('Product page'),
                    'attributes' => ['data-section-customize-mode-product']
                )
            )->fetch($this->getTemplatePath() . '_partials/form/sectionTitle.tpl')
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Display mode'),
            'hint' => $this->l('By default, PayPal shortcut is displayed on your web site via PrestaShop native hook. If you choose to use PrestaShop widgets, you will be able to copy widget code and insert it wherever you want in the product template.'),
            'name' => '',
            'html_content' => $this->getDisplayModeSection(ShortcutConfiguration::DISPLAY_MODE_PRODUCT)
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Widget code'),
            'name' => '',
            'html_content' => $this->getProductPageWidgetField()
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Hook for displaying shortcut on product pages'),
            'name' => '',
            'html_content' => $this->getProductPageHookSelect()
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Current shortcut style'),
            'name' => '',
            'html_content' => $this->getCustomizeStyleSectionProduct()
        );

        $inputs[] = array(
            'type' => 'html',
            'name' => '',
            'html_content' => $this->context->smarty->assign(
                array(
                    'sectionTitle' => $this->l('Sign up step in checkout'),
                    'attributes' => ['data-section-customize-mode-signup']
                )
            )->fetch($this->getTemplatePath() . '_partials/form/sectionTitle.tpl')
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Display mode'),
            'hint' => $this->l('By default, PayPal shortcut is displayed on your web site via PrestaShop native hook. If you choose to use PrestaShop widgets, you will be able to copy widget code and insert it wherever you want in the product template.'),
            'name' => '',
            'html_content' => $this->getDisplayModeSection(ShortcutConfiguration::DISPLAY_MODE_SIGNUP)
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Widget code'),
            'name' => '',
            'html_content' => $this->getSignupPageWidgetField()
        );

        $inputs[] = array(
            'type' => 'html',
            'label' => $this->l('Current shortcut style'),
            'name' => '',
            'html_content' => $this->getCustomizeStyleSectionSignup()
        );

        $inputs[] = array(
            'type' => 'switch',
            'label' => $this->l('Customize your order status'),
            'name' => 'paypal_customize_order_status',
            'hint' => $this->l('Please use this option only if you want to change the assigned default PayPal status on PrestaShop Order statuses.'),
            'is_bool' => true,
            'values' => array(
                array(
                    'id' => 'paypal_customize_order_status_on',
                    'value' => 1,
                    'label' => $this->l('Enabled'),
                ),
                array(
                    'id' => 'paypal_customize_order_status_off',
                    'value' => 0,
                    'label' => $this->l('Disabled'),
                )
            ),
        );

        $inputs[] = array(
            'type' => 'select',
            'label' => $this->l('Order Status for triggering the refund on PayPal'),
            'name' => 'paypal_os_refunded',
            'hint' => $this->l('You can refund the orders paid via PayPal directly via your PrestaShop BackOffice. Here you can choose the order status that triggers the refund on PayPal. Choose the option "no actions" if you would like to change the order status without triggering the automatic refund on PayPal.'),
            'desc' => $this->l('Default status : Refunded'),
            'options' => array(
                'query' => $orderStatuses,
                'id' => 'id',
                'name' => 'name'
            )
        );

        if (Configuration::get('PAYPAL_API_INTENT') == 'sale') {
            $inputs[] = array(
                'type' => 'select',
                'label' => $this->l('Order Status for triggering the cancellation on PayPal'),
                'name' => 'paypal_os_canceled',
                'hint' => $this->l('You can cancel orders paid via PayPal directly via your PrestaShop BackOffice. Here you can choose the order status that triggers the PayPal voiding of an authorized transaction on PayPal. Choose the option "no actions" if you would like to change the order status without triggering the automatic cancellation on PayPal.'),
                'desc' => $this->l(' Default status : Canceled'),
                'options' => array(
                    'query' => $orderStatuses,
                    'id' => 'id',
                    'name' => 'name'
                )
            );
        }

        if ($this->method != 'PPP' && Configuration::get('PAYPAL_API_INTENT') == 'authorization') {
            $inputs[] = array(
                'type' => 'select',
                'label' => $this->l('Payment accepted via BO (call PayPal to get the payment)'),
                'name' => 'paypal_os_accepted',
                'hint' => $this->l('You are currently using the Authorize mode. It means that you separate the payment authorization from the capture of the authorized payment. For capturing the authorized payement you have to change the order status to "payment accepted" (or to a custom status with the same meaning). Here you can choose a custom order status for accepting the order and validating transaction in Authorize mode.'),
                'desc' => $this->l('Default status : Payment accepted'),
                'options' => array(
                    'query' => $orderStatuses,
                    'id' => 'id',
                    'name' => 'name'
                )
            );

            $inputs[] = array(
                'type' => 'select',
                'label' => $this->l('Payment canceled via BO (call PayPal to cancel the capture)'),
                'name' => 'paypal_os_capture_canceled',
                'hint' => $this->l('You are currently using the Authorize mode. It means that you separate the payment authorization from the capture of the authorized payment. For canceling the authorized payment you have to change the order status to "canceled" (or to a custom status with the same meaning). Here you can choose an order status for canceling the order and voiding the transaction in Authorize mode.'),
                'desc' => $this->l('Default status : Canceled'),
                'options' => array(
                    'query' => $orderStatuses,
                    'id' => 'id',
                    'name' => 'name'
                )
            );
        }

        $inputs = array_merge($inputs, $inputsMethod);

        $this->fields_form['form']['form'] = array(
            'legend' => array(
                'title' => $this->l('Advanced mode'),
                'icon' => 'icon-cogs',
            ),
            'input' => $inputs,
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right button',
                'name' => 'saveAdvancedForm'
            ),
            'id_form' => 'pp_advanced_form'
        );

        $values = array();
        $this->advanceFormParametres = array_merge($this->advanceFormParametres, $method->advancedFormParametres);

        foreach ($this->advanceFormParametres as $parametre) {
            $values[$parametre] = Configuration::get(Tools::strtoupper($parametre));
        }

        $this->tpl_form_vars = array_merge($this->tpl_form_vars, $values);
    }

    public function saveForm()
    {
        $result = true;
        if (\Tools::isSubmit('saveAdvancedForm')) {
            \Configuration::updateGlobalValue(ShortcutConfiguration::USE_OLD_HOOK, 0);
            $methodCurrent = AbstractMethodPaypal::load($this->method);
            $this->advanceFormParametres = array_merge($this->advanceFormParametres, $methodCurrent->advancedFormParametres);

            foreach ($this->advanceFormParametres as $parametre) {
                if (\Tools::isSubmit($parametre)) {
                    $value = pSQL(\Tools::getValue($parametre), '');
                    $wrongHeightMsg = $this->l('You are trying to save invalid settings. The size of the PayPal button was automatically changed to the default values (value from 25 to 55 is required). Please click on « Customize » in order to change the size if needed.');
                    $wrongWidthMsg = $this->l('You are trying to save invalid settings. The size of the PayPal button was automatically changed to the default values (minimum 150 px is required). Please click on « Customize » in order to change the size if needed.');

                    switch ($parametre) {
                        case ShortcutConfiguration::STYLE_HEIGHT_PRODUCT:
                            if ((int) $value > 55) {
                                $value = 55;
                                $this->advancedFormErrors['product'] = $this->l($wrongHeightMsg);
                            }

                            if ((int) $value < 25) {
                                $value = 25;
                                $this->advancedFormErrors['product'] = $this->l($wrongHeightMsg);
                            }

                            break;
                        case ShortcutConfiguration::STYLE_HEIGHT_CART:
                            if ((int) $value > 55) {
                                $value = 55;
                                $this->advancedFormErrors['cart'] = $this->l($wrongHeightMsg);
                            }

                            if ((int) $value < 25) {
                                $value = 25;
                                $this->advancedFormErrors['cart'] = $this->l($wrongHeightMsg);
                            }

                            break;
                        case ShortcutConfiguration::STYLE_HEIGHT_SIGNUP:
                            if ((int) $value > 55) {
                                $value = 55;
                                $this->advancedFormErrors['signup'] = $this->l($wrongHeightMsg);
                            }

                            if ((int) $value < 25) {
                                $value = 25;
                                $this->advancedFormErrors['signup'] = $this->l($wrongHeightMsg);
                            }

                            break;
                        case ShortcutConfiguration::STYLE_WIDTH_PRODUCT:
                            if ((int) $value < 150) {
                                $value = 150;
                                $this->advancedFormErrors['product'] = $this->l($wrongWidthMsg);
                            }

                            break;
                        case ShortcutConfiguration::STYLE_WIDTH_CART:
                            if ((int) $value < 150) {
                                $value = 150;
                                $this->advancedFormErrors['cart'] = $this->l($wrongWidthMsg);
                            }

                            break;
                        case ShortcutConfiguration::STYLE_WIDTH_SIGNUP:
                            if ((int) $value < 150) {
                                $value = 150;
                                $this->advancedFormErrors['signup'] = $this->l($wrongWidthMsg);
                            }

                            break;
                    }

                    $result &= \Configuration::updateValue(\Tools::strtoupper($parametre), $value);
                }
            }
        }

        if (Tools::isSubmit('behaviorForm')) {
            foreach ($this->parametres as $parametre) {
                if (in_array(
                    $parametre,
                    array(
                        Tools::strtolower(ShortcutConfiguration::SHOW_ON_PRODUCT_PAGE),
                        Tools::strtolower(ShortcutConfiguration::SHOW_ON_CART_PAGE),
                        Tools::strtolower(ShortcutConfiguration::SHOW_ON_SIGNUP_STEP))
                )) {
                    $result &= \Configuration::updateValue(\Tools::strtoupper($parametre), pSQL(\Tools::getValue($parametre), ''));
                } elseif (\Tools::isSubmit($parametre)) {
                    $result &= \Configuration::updateValue(\Tools::strtoupper($parametre), pSQL(\Tools::getValue($parametre), ''));
                }
            }
        }

        return $result;
    }

    public function showCurrencyRestrictionWarning()
    {
        $currencyMode = Currency::getPaymentCurrenciesSpecial($this->module->id);
        if (isset($currencyMode['id_currency']) == false || $currencyMode['id_currency'] == -1) {
            return false;
        }

        if ($currencyMode['id_currency'] == -2) {
            $currency = new Currency((int)Configuration::get('PS_CURRENCY_DEFAULT'));
        } else {
            $currency = new Currency((int)$currencyMode['id_currency']);
        }

        return in_array($currency->iso_code, $this->module->currencyMB) == false;
    }

    protected function getShortcutCustomizeModeOptions()
    {
        return array(
            array(
                'id' => ShortcutConfiguration::DISPLAY_MODE_TYPE_HOOK,
                'name' => $this->l('PrestaShop native hook (recommended)')
            ),
            array(
                'id' => ShortcutConfiguration::DISPLAY_MODE_TYPE_WIDGET,
                'name' => $this->l('PrestaShop widget')
            )
        );
    }

    protected function getProductPageWidgetField()
    {
        $this->context->smarty->assign('confName', 'productPageWidgetCode');
        $this->context->smarty->assign('widgetCode', '{widget name=\'paypal\' action=\'paymentshortcut\'}');
        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/fields/widgetCode.tpl');
    }

    protected function getProductPageHookSelect()
    {
        $hooks = [];

        if (version_compare(_PS_VERSION_, '1.7.6', '>=')) {
            $hooks[ShortcutConfiguration::HOOK_PRODUCT_ACTIONS] = [
                'desc' => $this->l('displayProductActions (recommended) - This hook allows additional actions to be triggered, near the add to cart button.'),
                'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayProductActions.jpg'
            ];

            $hooks[ShortcutConfiguration::HOOK_REASSURANCE] = [
                'desc' => $this->l('displayReassurance - This hook adds new elements just next to the reassurance block.'),
                'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayReassurance.jpg'
            ];
        } else {
            $hooks[ShortcutConfiguration::HOOK_REASSURANCE] = [
                'desc' => $this->l('displayReassurance - This hook adds new elements just next to the reassurance block (recomended).'),
                'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayReassurance.jpg'
            ];
        }

        if (version_compare(_PS_VERSION_, '1.7.1', '>=')) {
            $hooks[ShortcutConfiguration::HOOK_AFTER_PRODUCT_ADDITIONAL_INFO] = [
                'desc' => $this->l('displayProductAdditionalInfo - This hook adds additional information before the reassurance block and product description.'),
                'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayProductAdditionalInfo.jpg'
            ];

            $hooks[ShortcutConfiguration::HOOK_AFTER_PRODUCT_THUMBS] = [
                'desc' => $this->l('displayAfterProductThumbs - This hook displays new elements below product images.'),
                'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayAfterProductThumbs.jpg'
            ];
        }

        $hooks[ShortcutConfiguration::HOOK_FOOTER_PRODUCT] = [
            'desc' => $this->l('displayFooterProduct - This hook adds new blocks on the product page just before global site footer.'),
            'preview' => '/modules/paypal/views/img/shortcut-preview/product-displayProductFooter.jpg'
        ];

        $this->context->smarty->assign(array(
            'hooks' => $hooks,
            'confName' => ShortcutConfiguration::PRODUCT_PAGE_HOOK,
            'selectedHook' => Configuration::get(ShortcutConfiguration::PRODUCT_PAGE_HOOK)
        ));
        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/fields/hookSelect.tpl');
    }

    protected function getCartPageHookSelect()
    {
        $this->context->smarty->assign(array(
            'hooks' => array(
                ShortcutConfiguration::HOOK_EXPRESS_CHECKOUT => [
                    'desc' => $this->l('displayExpressCheckout (recommended) - This hook adds content to the cart view, in the right sidebar, after the cart totals.'),
                    'preview' => '/modules/paypal/views/img/shortcut-preview/cart-displayExpressCheckout.jpg'
                ],
                ShortcutConfiguration::HOOK_SHOPPING_CART_FOOTER => [
                    'desc' => $this->l('displayShoppingCartFooter - This hook displays some specific information after the list of products in the shopping cart.'),
                    'preview' => '/modules/paypal/views/img/shortcut-preview/cart-displayShoppingCartFooter.jpg'
                ],
                ShortcutConfiguration::HOOK_REASSURANCE => [
                    'desc' => $this->l('displayReassurance - This hook displays content in the right sidebar, in the block below the cart total.'),
                    'preview' => '/modules/paypal/views/img/shortcut-preview/cart-displayReassurance.jpg'
                ],
            ),
            'confName' => ShortcutConfiguration::CART_PAGE_HOOK,
            'selectedHook' => Configuration::get(ShortcutConfiguration::CART_PAGE_HOOK)
        ));
        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/fields/hookSelect.tpl');
    }

    protected function getCartPageWidgetField()
    {
        $this->context->smarty->assign('widgetCode', '{widget name=\'paypal\' action=\'paymentshortcut\'}');
        $this->context->smarty->assign('confName', 'cartPageWidgetCode');
        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/fields/widgetCode.tpl');
    }

    protected function getSignupPageWidgetField()
    {
        $this->context->smarty->assign('widgetCode', '{widget name=\'paypal\' action=\'paymentshortcut\'}');
        $this->context->smarty->assign('confName', 'signupPageWidgetCode');
        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/fields/widgetCode.tpl');
    }

    protected function getCustomizeStyleSectionProduct()
    {
        $sectionDefinition = new CustomizeButtonStyleSectionDefinition();
        $sectionDefinition
            ->setNameColor(ShortcutConfiguration::STYLE_COLOR_PRODUCT)
            ->setTypeColor(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameHeight(ShortcutConfiguration::STYLE_HEIGHT_PRODUCT)
            ->setTypeHeight(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameWidth(ShortcutConfiguration::STYLE_WIDTH_PRODUCT)
            ->setTypeWidth(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameLabel(ShortcutConfiguration::STYLE_LABEL_PRODUCT)
            ->setTypeLabel(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameShape(ShortcutConfiguration::STYLE_SHAPE_PRODUCT)
            ->setTypeShape(ShortcutConfiguration::TYPE_STYLE_SELECT);

        if (false === empty($this->advanceFormErrors)) {
            foreach ($this->advanceFormErrors as $key => $error) {
                if ($key === 'product') {
                    $sectionDefinition->addError($error);
                }
            }
        }

        return $this->getCustomizeStyleSection($sectionDefinition);
    }

    protected function getCustomizeStyleSectionCart()
    {
        $sectionDefinition = new CustomizeButtonStyleSectionDefinition();
        $sectionDefinition
            ->setNameColor(ShortcutConfiguration::STYLE_COLOR_CART)
            ->setTypeColor(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameHeight(ShortcutConfiguration::STYLE_HEIGHT_CART)
            ->setTypeHeight(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameWidth(ShortcutConfiguration::STYLE_WIDTH_CART)
            ->setTypeWidth(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameLabel(ShortcutConfiguration::STYLE_LABEL_CART)
            ->setTypeLabel(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameShape(ShortcutConfiguration::STYLE_SHAPE_CART)
            ->setTypeShape(ShortcutConfiguration::TYPE_STYLE_SELECT);

        if (false === empty($this->advancedFormErrors)) {
            foreach ($this->advancedFormErrors as $key => $error) {
                if ($key === 'cart') {
                    $sectionDefinition->addError($error);
                }
            }
        }

        return $this->getCustomizeStyleSection($sectionDefinition);
    }

    protected function getCustomizeStyleSectionSignup()
    {
        $sectionDefinition = new CustomizeButtonStyleSectionDefinition();
        $sectionDefinition
            ->setNameColor(ShortcutConfiguration::STYLE_COLOR_SIGNUP)
            ->setTypeColor(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameHeight(ShortcutConfiguration::STYLE_HEIGHT_SIGNUP)
            ->setTypeHeight(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameWidth(ShortcutConfiguration::STYLE_WIDTH_SIGNUP)
            ->setTypeWidth(ShortcutConfiguration::TYPE_STYLE_TEXT)
            ->setNameLabel(ShortcutConfiguration::STYLE_LABEL_SIGNUP)
            ->setTypeLabel(ShortcutConfiguration::TYPE_STYLE_SELECT)
            ->setNameShape(ShortcutConfiguration::STYLE_SHAPE_SIGNUP)
            ->setTypeShape(ShortcutConfiguration::TYPE_STYLE_SELECT);

        if (false === empty($this->advanceFormErrors)) {
            foreach ($this->advanceFormErrors as $key => $error) {
                if ($key === 'signup') {
                    $sectionDefinition->addError($error);
                }
            }
        }

        return $this->getCustomizeStyleSection($sectionDefinition);
    }

    protected function getCustomizeStyleSection(CustomizeButtonStyleSectionDefinition $sectionDefinition)
    {
        $defaultLabel = $sectionDefinition->getNameLabel() === ShortcutConfiguration::STYLE_LABEL_PRODUCT ? ShortcutConfiguration::STYLE_LABEL_BUYNOW : ShortcutConfiguration::STYLE_LABEL_CHECKOUT;
        $label = Configuration::get($sectionDefinition->getNameLabel(), null, null, null, $defaultLabel);
        $height = (int) Configuration::get($sectionDefinition->getNameHeight(), null, null, null, 35);
        $width = (int) Configuration::get($sectionDefinition->getNameWidth(), null, null, null, 200);
        $color = Configuration::get($sectionDefinition->getNameColor(), null, null, null, ShortcutConfiguration::STYLE_COLOR_GOLD);
        $shape = Configuration::get($sectionDefinition->getNameShape(), null, null, null, ShortcutConfiguration::STYLE_SHAPE_RECT);

        $ShortCut = new ShortcutPreview(
            $label,
            $height,
            $width,
            $color,
            $shape
        );

        $configurations = [];

        // Init color selection
        $colorOptions = [
            new SelectOption(
                ShortcutConfiguration::STYLE_COLOR_GOLD,
                $this->l('Gold (recommended)')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_COLOR_BLUE,
                $this->l('Blue (first alternative)')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_COLOR_SILVER,
                $this->l('Silver (second alternative)')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_COLOR_WHITE,
                $this->l('White (second alternative)')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_COLOR_BLACK,
                $this->l('Black (second alternative)')
            )
        ];

        $colorSelect = new Select(
            $sectionDefinition->getNameColor(),
            $colorOptions,
            $this->l('Color'),
            $color,
            ShortcutConfiguration::CONFIGURATION_TYPE_COLOR
        );
        $colorSelect->setAfterSelectContent(Context::getContext()->smarty->fetch(_PS_MODULE_DIR_ . 'paypal/views/templates/admin/_partials/form/colorDescriptions.tpl'));

        $configurations[] = $colorSelect;

        // Init a shape selection
        $shapeOptions = [
            new SelectOption(
                ShortcutConfiguration::STYLE_SHAPE_RECT,
                $this->l('Rectangle (recommended) - default button shape')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_SHAPE_PILL,
                $this->l('Pill - secondary button shape option')
            )
        ];

        $shapeSelect = new Select(
            $sectionDefinition->getNameShape(),
            $shapeOptions,
            $this->l('Shape'),
            $shape,
            ShortcutConfiguration::CONFIGURATION_TYPE_SHAPE
        );

        $configurations[] = $shapeSelect;

        // Init a size field
        $inputs = [];
        $inputs[] = new TextInput(
            $sectionDefinition->getNameWidth(),
            $width,
            $this->l('Width (min 150)'),
            ShortcutConfiguration::CONFIGURATION_TYPE_WIDTH,
            ['data-msg-error' => $this->l('Minimum 150 px is required')]
        );

        $inputs[] = new TextInput(
            $sectionDefinition->getNameHeight(),
            $height,
            $this->l('Height (value from 25 to 55)'),
            ShortcutConfiguration::CONFIGURATION_TYPE_HEIGHT,
            ['data-msg-error' => $this->l('Value from 25 to 55 is required')]
        );

        $sizeField = new InputChain(
            $inputs
        );
        $sizeField->setLabel($this->l('Size'));
        $configurations[] = $sizeField;

        // Init a label selection
        $labelOptions = [
            new SelectOption(
                ShortcutConfiguration::STYLE_LABEL_BUYNOW,
                $sectionDefinition->getNameLabel() === ShortcutConfiguration::STYLE_LABEL_PRODUCT ? $this->l('PayPal Buy Now button (recommended)') : $this->l('PayPal Buy Now button')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_LABEL_PAYPAL,
                $this->l('PayPal logo')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_LABEL_CHECKOUT,
                $sectionDefinition->getNameLabel() === ShortcutConfiguration::STYLE_LABEL_PRODUCT ? $this->l('Checkout button') : $this->l('Checkout button (recomended)')
            ),
            new SelectOption(
                ShortcutConfiguration::STYLE_LABEL_PAY,
                $this->l('Pay With PayPal button')
            )
        ];

        $labelSelect = new Select(
            $sectionDefinition->getNameLabel(),
            $labelOptions,
            $this->l('Label'),
            $label,
            ShortcutConfiguration::CONFIGURATION_TYPE_LABEL
        );

        $configurations[] = $labelSelect;

        $this->context->smarty
            ->assign('shortcut', $ShortCut->render())
            ->assign('errors', $sectionDefinition->getErrors())
            ->assign('configurations', $configurations);

        return $this->context->smarty->fetch($this->getTemplatePath() . '_partials/form/customizeStyleSection.tpl');
    }

    public function displayAjaxGetShortcut()
    {
        $label = Tools::getValue('label', 'pay');
        $height = (int) Tools::getValue('height', 35);
        $width = (int) Tools::getValue('width', 150);
        $color = Tools::getValue('color', 'gold');
        $shape = Tools::getValue('shape', 'rect');

        $ShortCut = new ShortcutPreview(
            $label,
            $height,
            $width,
            $color,
            $shape
        );

        $response = new JsonResponse(['content' => $ShortCut->render()]);
        return $response->send();
    }

    public function postProcess()
    {
        parent::postProcess();

        if (Tools::isSubmit('saveAdvancedForm')) {
            Media::addJsDef(['sectionSelector' => '#pp_advanced_form']);
        }
    }

    /**
     * @param string $name
     * @return string
     */
    public function getDisplayModeSection($name)
    {
        $options = [
            new SelectOption(
                ShortcutConfiguration::DISPLAY_MODE_TYPE_HOOK,
                $this->l('PrestaShop native hook (recommended)')
            ),
            new SelectOption(
                ShortcutConfiguration::DISPLAY_MODE_TYPE_WIDGET,
                $this->l('PrestaShop widget')
            ),
        ];

        $select = new Select(
            $name,
            $options
        );

        $select->setCss('displayModeSection');

        return $select->render();
    }
}
