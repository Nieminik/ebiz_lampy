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
// init incontext

const Shortcut = {

  idProduct: null,

  combination: null,

  productQuantity: null,

  page: null,

  button: document.querySelector('[paypal-button-container]'),

  controller: sc_init_url,

  controllerScOrder: scOrderUrl,

  init() {
    this.updateInfo();
    prestashop.on('updatedProduct', function(e, xhr, settings) {
      Shortcut.checkProductAvailability();
    });
  },

  updateInfo() {
    this.page = $('[data-container-express-checkout]').data('paypal-source-page');

    if (this.page == 'product') {
      this.productQuantity = $('input[name="qty"]').val();
      this.idProduct = $('[data-paypal-id-product]').val();
      this.combination = this.getCombination();
    }
  },

  getCombination() {
    let combination = [],
      re = /group\[([0-9]+)\]/;

    $.each($('#add-to-cart-or-refresh').serializeArray(), (key, item) => {
      if(res = item.name.match(re)) {
        combination.push(`${res[1]} : ${item.value}`);
      }
    });

    return combination;
  },

  initButton() {
    paypal.Buttons({
      fundingSource: paypal.FUNDING.PAYPAL,

      style: {
        label: 'pay',
        height: 35
      },

      createOrder: function(data, actions) {
        return Shortcut.getIdOrder();
      },

      onApprove: function(data, actions) {
        Shortcut.sendData(data);
      },

    }).render(this.button);
  },

  sendData(data) {
    let form = document.createElement('form');
    let input = document.createElement('input');

    input.name = "paymentData";
    input.value = JSON.stringify(data);

    form.method = "POST";
    form.action = Shortcut.controllerScOrder;

    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
  },

  getIdOrder() {
    let data = new Object();
    let url = new URL(this.controller);
    url.searchParams.append('ajax', '1');
    url.searchParams.append('action', 'CreateOrder');
    this.updateInfo();
    data['page'] = this.page;


    if (this.page == 'product') {
      data['idProduct'] = this.idProduct;
      data['quantity'] = this.productQuantity;
      data['combination'] = this.combination.join('|');
    }

    return fetch(url.toString(), {
      method: 'post',
      headers: {
        'content-type': 'application/json;charset=utf-8'
      },
      body: JSON.stringify(data)
    }).then(function(res) {
      return res.json();
    }).then(function(data) {
      if (data.success) {
        return data.idOrder;
      }
    });
  },

  checkProductAvailability() {
    let data = new Object();
    let url = new URL(this.controller);
    url.searchParams.append('ajax', '1');
    url.searchParams.append('action', 'CheckAvailability');
    this.updateInfo();
    data['page'] = this.page;

    if (this.page == 'product') {
      data['idProduct'] = this.idProduct;
      data['quantity'] = this.productQuantity;
      data['combination'] = this.combination.join('|');
    }

    fetch(url.toString(),
      {
        method: 'post',
        headers: {
          'content-type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(data),
      }).then(function(res){
        return res.json();
    }).then(function (json) {
      if (json.success) {
        Shortcut.button.style.display = 'block';
      } else {
        Shortcut.button.style.display = 'none';
      }
    });
  }
};


$(document).ready( () => {
  Shortcut.init();
  Shortcut.initButton();
});


