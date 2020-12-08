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

namespace PaypalAddons\classes\API\Onboarding;


use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use PaypalAddons\classes\API\Response\Error;
use PaypalAddons\classes\API\Response\ResponseGetCredentials;
use Symfony\Component\VarDumper\VarDumper;

class PaypalGetCredentials
{
    /** @var */
    protected $httpClient;

    /** @var string*/
    protected $authToken;

    /** @var string*/
    protected $partnerId;

    public function __construct($authToken, $partnerId, $sandbox)
    {
        $this->httpClient = new Client(['base_url' => $sandbox ? 'https://api.sandbox.paypal.com' : 'https://api.paypal.com']);
        $this->authToken = $authToken;
        $this->partnerId = $partnerId;
    }

    public function execute()
    {
        $returnResponse = new ResponseGetCredentials();
        $uri = sprintf('/v1/customer/partners/%s/merchant-integrations/credentials', $this->partnerId);

        try {
            $response = $this->httpClient->get(
                $uri,
                [
                    RequestOptions::HEADERS => [
                        'Authorization' => 'Bearer ' . $this->authToken
                    ],
                ]
            );

            $responseDecode = json_decode($response->getBody()->getContents());
            $returnResponse->setSuccess(true)
                ->setClientId($responseDecode->client_id)
                ->setSecret($responseDecode->client_secret)
                ->setData($returnResponse);
        } catch (\Exception $e) {
            $error = new Error();
            $error->setMessage($e->getMessage())->setErrorCode($e->getCode());
            $returnResponse->setError($error)->setSuccess(false);
        }


        return $returnResponse;
    }
}
