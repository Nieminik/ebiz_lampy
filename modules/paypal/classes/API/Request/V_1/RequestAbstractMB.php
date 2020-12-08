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

namespace PaypalAddons\classes\API\Request\V_1;


use Configuration;
use Country;

abstract class RequestAbstractMB extends RequestAbstract
{
    public function getApiContext($mode_order = null)
    {
        $apiContext = parent::getApiContext($mode_order);

        if (Country::getIsoById(Configuration::get('PS_COUNTRY_DEFAULT')) == 'MX') {
            $bnCodeSuffix = 'Mexico';
        } else {
            $bnCodeSuffix = 'Brazil';
        }

        $apiContext->addRequestHeader('PayPal-Partner-Attribution-Id', (getenv('PLATEFORM') == 'PSREAD')?'PrestaShop_Cart_Ready_'.$bnCodeSuffix:'PrestaShop_Cart_'.$bnCodeSuffix);

        return $apiContext;
    }
}
