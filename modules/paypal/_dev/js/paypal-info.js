/*
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

// init in-context
$(document).ready( () => {

  // Insert paypal info block after option name
  $('.payment-option').each((step) => {
    let i = step + 1;
    if ($(`#payment-option-${i}-container [data-module-name^='paypal']`).length > 0) {
      $('[data-paypal-info]').insertAfter($(`#payment-option-${i}-container label`));
    }
  });

  // Show block with paypal payment benefits
  let configs = getConfigPopup();
  $('[data-paypal-info-popover]').popover({
    placement: configs.popoverPlacement,
    trigger: configs.popoverTrigger
  });

  if ($(window).width() > 991) {
    hoverPopup();
  }

});

const getConfigPopup = () => {
  let placement = 'right',
    trigger = 'hover';
  if ($(window).width() < 992) {
    placement = 'bottom';
    trigger = 'click';
  }
  return {
    popoverPlacement: placement,
    popoverTrigger: trigger
  }

}

const hoverPopup = () => {
  $('[data-paypal-info-popover] i').on('mouseover', (e) => {
    e.target.innerText = 'cancel';
    $('body').addClass('pp-popover');
  })

  $('[data-paypal-info-popover] i').on('mouseout', (e) => {
    e.target.innerText = 'info';
    if (!$('[data-pp-info]').is(':visible')) {
      $('body').removeClass('pp-popover');
    }
  })

  $('[data-paypal-info-popover] i').on('click', (e) => {
    hidePopup($(e.target));
  })
}
