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
use PaypalAddons\classes\API\Response\ResponseGetAuthToken;

class PaypalGetAuthToken
{
    /** @var */
    protected $httpClient;

    /** @var string*/
    protected $authCode;

    /** @var string*/
    protected $sharedId;

    /** @var string*/
    protected $sellerNonce;

    public function __construct($authCode, $sharedId, $sellerNonce, $sandbox)
    {
        $this->httpClient = new Client(['base_url' => $sandbox ? 'https://api.sandbox.paypal.com' : 'https://api.paypal.com']);
        $this->authCode = $authCode;
        $this->sharedId = $sharedId;
        $this->sellerNonce = $sellerNonce;
    }

    /**
     * @return ResponseGetAuthToken
     */
    public function execute()
    {
        $returnResponse = new ResponseGetAuthToken();
        $body = sprintf('grant_type=authorization_code&code=%s&code_verifier=%s', $this->authCode, $this->sellerNonce);

        try {
            $response = $this->httpClient->post(
                '/v1/oauth2/token',
                [
                    RequestOptions::BODY => $body,
                    RequestOptions::HEADERS => [
                        'Content-Type' => 'text/plain',
                        'Authorization' => 'Basic ' . base64_encode($this->sharedId)
                    ],
                ]
            );

            $responseDecode = json_decode($response->getBody()->getContents());
            $returnResponse->setSuccess(true)
                ->setData($returnResponse)
                ->setAuthToken($responseDecode->access_token)
                ->setRefreshToken($responseDecode->refresh_token)
                ->setTokenType($responseDecode->token_type)
                ->setNonce($responseDecode->nonce);
        } catch (\Exception $e) {
            $error = new Error();
            $error->setMessage($e->getMessage())->setErrorCode($e->getCode());
            $returnResponse->setError($error)->setSuccess(false);
        }


        return $returnResponse;
    }
}
