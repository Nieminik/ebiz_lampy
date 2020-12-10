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
* @author 202-ecommerce <tech@202-ecommerce.com>
* @copyright PayPal
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

<div field-row class="pp__my-5 pp__label {if isset($css) && $css}{$css}{/if}">

    {if isset($label) && $label}
        <div label>
          <div class="pp__my-2">{$label|escape:'hmlall':'utf-8'}</div>
        </div>
    {/if}

  <div field>
    <select
            name="{if isset($name)}{$name}{/if}"
            {if isset($configType)}data-type="{$configType}"{/if}>

        {if isset($options) && false === empty($options)}
            {foreach from=$options item=option}
                {$option->render() nofilter}
            {/foreach}
        {/if}

    </select>

    {if isset($afterSelectContent)}
        <div after-select-content>
          {$afterSelectContent nofilter}
        </div>
    {/if}
  </div>
</div>


