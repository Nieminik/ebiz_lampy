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

// Import functions for scrolling effect to necessary block on click
import {hoverConfig, hoverTabConfig} from './functions.js';
import { SetupAdmin } from './adminSetup.js';

var CustomizeCheckout = {
  init() {
    // Scroll to necessary block
    $('[data-pp-link-settings]').on('click', (e) => {
      let el = $(e.target.attributes.href.value);
      if (el.length) {
        hoverConfig(el);
      } else {
        hoverTabConfig();
      }
    });

    // Remove effect after leaving cursor from the block
    $('.defaultForm').on('mouseleave', (e) => {
      $(e.currentTarget).removeClass('pp-settings-link-on');
    });

    CustomizeCheckout.checkConfigurations();
    $('input').change(CustomizeCheckout.checkConfigurations);
  },

    checkConfigurations() {
      const paypalEcEnabled = $('input[name="paypal_mb_ec_enabled"]');
      const paypalApiCard = $('input[name="paypal_api_card"]');
      const EcOptions = [
          'paypal_express_checkout_in_context',
          'paypal_express_checkout_shortcut_cart',
          'paypal_api_advantages',
          'paypal_config_brand',
          'paypal_config_logo'
      ];
      const MbCardOptions = [
          'paypal_vaulting',
          'paypal_merchant_installment'
      ];
      const customOrderStatus = $('[name="paypal_customize_order_status"]');
      const statusOptions = [
          'paypal_os_refunded',
          'paypal_os_canceled',
          'paypal_os_accepted',
          'paypal_os_capture_canceled',
          'paypal_os_waiting_validation',
          'paypal_os_accepted_two',
          'paypal_os_processing',
          'paypal_os_validation_error',
          'paypal_os_refunded_paypal'
      ];

      if (paypalEcEnabled.length > 0 ) {
        if (paypalEcEnabled.prop('checked') == true) {
          EcOptions.forEach(CustomizeCheckout.showConfiguration);
          $('.message-context').show();
        } else {
          EcOptions.forEach(CustomizeCheckout.hideConfiguration);
          $('.message-context').hide();
        }
      }

      if (paypalApiCard.length > 0) {
        if (paypalApiCard.prop('checked') == true) {
          MbCardOptions.forEach(CustomizeCheckout.showConfiguration);
        } else {
          MbCardOptions.forEach(CustomizeCheckout.hideConfiguration);
        }
      }

      if (customOrderStatus.length > 0) {
        if (customOrderStatus.prop('checked') == true) {
          statusOptions.forEach(CustomizeCheckout.showConfiguration);
          $('.advanced-help-message').show();
        } else {
          statusOptions.forEach(CustomizeCheckout.hideConfiguration);
          $('.advanced-help-message').hide();
        }
      }
    },

    // Hide block while switch inactive
    hideConfiguration(name) {
        let selector = `[name="${name}"]`;
        let configuration = $(selector);
        let formGroup = configuration.closest('.col-lg-9').closest('.form-group');

        formGroup.hide();
    },

    // Show block while switch is active
    showConfiguration(name) {
        let selector = `[name="${name}"]`;
        let configuration = $(selector);
        let formGroup = configuration.closest('.col-lg-9').closest('.form-group');

        formGroup.show();
    },

}

$(document).ready(() => {
  CustomizeCheckout.init();
  // Handle click on "Install Prestashop Checkout" button
  $('.install-ps-checkout').click(() => {
    SetupAdmin.psCheckoutHandleAction('install');
  })
});
