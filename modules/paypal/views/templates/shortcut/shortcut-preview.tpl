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

{extends file='./shortcut-layout.tpl'}

{block name='content'}
  <div preview-button-container {if isset($shortcutID)} data-id="{$shortcutID}" {/if}></div>
{/block}

{block name='init-button'}
  <script>
    {literal}

    // Wrap a logic in a function init() for to avoid the redefining the variables
    function init () {
        var btnStyle = {/literal}{$styleSetting|json_encode nofilter}{literal};
        var selector = '[preview-button-container]{/literal}{if isset($shortcutID)}[data-id="{$shortcutID}"]{/if}{literal}';

        function waitPaypalIsLoaded() {
          if (typeof paypal === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }
            document.querySelector(selector).style.width = btnStyle['width'] + 'px';
            paypal.Buttons({
                fundingSource: paypal.FUNDING.PAYPAL,
                style: btnStyle
            }).render(document.querySelector(selector));
        }

        waitPaypalIsLoaded();
    }

    init();

    {/literal}
  </script>
{/block}

