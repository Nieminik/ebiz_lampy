{*
* 2007-2020 PayPal
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author 2007-2020 PayPal
 *  @author 202 ecommerce <tech@202-ecommerce.com>
*  @copyright PayPal
*  @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*
*}

{if $showPsCheckoutInfo}
    {include './_partials/messages/prestashopCheckoutInfo.tpl'}
{/if}

{if $showRestApiIntegrationMessage}
    {include './_partials/messages/restApiIntegrationMessage.tpl'}
{/if}

{if isset($need_rounding) && $need_rounding}
  {include './_partials/messages/roundingSettingsMessage.tpl'}
{/if}

{include './_partials/headerLogo.tpl'}

{if isset($formBehavior)}
    {$formBehavior nofilter} {* the variable contains html code *}
{/if}

{if isset($formAdvanced)}
    {$formAdvanced nofilter} {* the variable contains html code *}
{/if}

