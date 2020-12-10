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

namespace PaypalAddons\classes\API\Request;


use PaypalAddons\classes\AbstractMethodPaypal;
use PaypalAddons\classes\API\Response\Error;
use PaypalAddons\classes\API\Response\ResponseOrderRefund;
use PaypalAddons\classes\Exception\OrderFullyRefundedException;
use PaypalAddons\classes\Exception\RefundCalculationException;
use PaypalAddons\services\ServicePaypalOrder;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Payments\CapturesRefundRequest;
use PayPalHttp\HttpException;
use Validate;
use Symfony\Component\VarDumper\VarDumper;

class PaypalOrderRefundRequest extends RequestAbstract
{
    protected $paypalOrder;

    public function __construct(PayPalHttpClient $client, AbstractMethodPaypal $method, \PaypalOrder $paypalOrder)
    {
        parent::__construct($client, $method);
        $this->paypalOrder = $paypalOrder;
    }

    public function execute()
    {
        $response = new ResponseOrderRefund();
        $captureRefund = new CapturesRefundRequest($this->getResourceId());
        $captureRefund->prefer('return=representation');

        try {
            if ($body = $this->buildRequestBody()) {
                $captureRefund->body = $body;
            }

            $exec = $this->client->execute($captureRefund);

            if (in_array($exec->statusCode, [200, 201, 202])) {
                $response->setSuccess(true)
                    ->setIdTransaction($exec->result->id)
                    ->setStatus($exec->result->status)
                    ->setAmount($exec->result->amount->value)
                    ->setDateTransaction($this->getDateTransaction($exec));
            } else {
                $error = new Error();
                $resultDecoded = json_decode($exec->message);
                $error->setMessage($resultDecoded->message);
                $response->setSuccess(false)->setError($error);
            }
        } catch (HttpException $e) {
            $error = new Error();
            $resultDecoded = json_decode($e->getMessage());

            $error->setMessage($resultDecoded->details[0]->description)->setErrorCode($e->getCode());
            $response->setSuccess(false)
                ->setError($error);

            if ($resultDecoded->details[0]->issue == 'CAPTURE_FULLY_REFUNDED') {
                $response->setAlreadyRefunded(true);
            }
        } catch (OrderFullyRefundedException $e) {
            $response->setSuccess(false)->setAlreadyRefunded(true);
        } catch (\Exception $e) {
            $error = new Error();
            $error->setErrorCode($e->getCode())->setMessage($e->getMessage());
            $response->setError($error)->setSuccess(false);
        }

        return $response;
    }

    protected function getDateTransaction($exec)
    {
        $date = \DateTime::createFromFormat(\DateTime::ATOM, $exec->result->create_time);
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @return array
     */
    protected function buildRequestBody()
    {
        $amount = $this->getAmount();

        if ((float)$amount['value'] == (float)$this->paypalOrder->total_paid) {
            return [];
        }

        $body = [
            'amount' => $this->getAmount()
        ];

        return $body;
    }

    /**
     * @return array
     * @throws OrderFullyRefundedException
     * @throws RefundCalculationException
     */
    protected function getAmount()
    {
        $total = 0;
        $totalRefund = 0;

        try {
            $order = $this->method->getInfo($this->paypalOrder->id_payment);
            $payments = $order->getData()->result->purchase_units[0]->payments;

            if (isset($payments->captures)) {
                foreach ($payments->captures as $capture) {
                    $total += $capture->amount->value;
                }
            }

            if (isset($payments->refunds)) {
                foreach ($payments->refunds as $refund) {
                    $totalRefund += $refund->amount->value;
                }
            }
        } catch (\Exception $e) {
            throw new RefundCalculationException($e->getMessage());
        }

        if ($total == $totalRefund) {
            throw new OrderFullyRefundedException();
        }

        $refundValue = $this->method->formatPrice(($total - $totalRefund), $this->paypalOrder->currency);

        $amount = [
            'currency_code' => $this->paypalOrder->currency,
            'value' => $refundValue
        ];

        return $amount;
    }

    protected function getResourceId()
    {
        $paypalOrderService = new ServicePaypalOrder();
        $capture = $paypalOrderService->getCapture($this->paypalOrder);

        if (Validate::isLoadedObject($capture)) {
            $idResource = $capture->id_capture;
        } else {
            $idResource = $this->paypalOrder->id_transaction;
        }

        return $idResource;
    }
}
