/*! For license information please see adminCheckout.js.LICENSE */
!function(e){var t={};function o(n){if(t[n])return t[n].exports;var a=t[n]={i:n,l:!1,exports:{}};return e[n].call(a.exports,a,a.exports,o),a.l=!0,a.exports}o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)o.d(n,a,function(t){return e[t]}.bind(null,a));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=13)}({0:function(e,t,o){"use strict";o.d(t,"a",function(){return n}),o.d(t,"b",function(){return a});var n=function(e){$(".defaultForm").removeClass("pp-settings-link-on"),$(".page-head-tabs a").removeClass("pp-settings-link-on pp__border-b-primary"),e.addClass("pp-settings-link-on"),$("html, body").animate({scrollTop:e.offset().top-200+"px"},900)},a=function(){var e=document.querySelectorAll(".page-head-tabs a"),t=$(".page-head-tabs a.current");e.forEach(function(e){var o=$(e).attr("href").includes("AdminPayPalCustomizeCheckout"),n=$(e).attr("href").includes("AdminPayPalSetup");(t.attr("href").includes("AdminPayPalCustomizeCheckout")&&n||t.attr("href").includes("AdminPayPalSetup")&&o)&&$(e).addClass("pp-settings-link-on pp__border-b-primary")}),$("html, body").animate({scrollTop:$(".page-head-tabs").offset().top-200+"px"},900)}},1:function(e,t,o){"use strict";o.r(t);var n=o(0),a=function(e,t){$.ajax({url:controllerUrl,type:"POST",data:{ajax:!0,action:"handleOnboardingResponse",authCode:e,sharedId:t},success:function(e){console.log(e)}})};o.d(t,"SetupAdmin",function(){return i});var i={init:function(){$("#logoutAccount").on("click",function(e){i.logoutAccount()}),$("#confirmCredentials").click(function(e){$(e.currentTarget).closest("form").submit()}),$(document).on("click","#btn-check-requirements",function(){i.checkRequirements()}),$("[data-pp-link-settings]").on("click",function(e){e.preventDefault();var t=$(e.target.attributes.href.value);t.length?Object(n.a)(t):Object(n.b)()}),$(".defaultForm").on("mouseleave",function(e){$(e.currentTarget).removeClass("pp-settings-link-on")}),$(".ps-checkout-info").on("click",function(e){var t=e.target.getAttribute("data-action");i.psCheckoutHandleAction(t)}),$(document).on("contextmenu","[data-paypal-button]",function(e){e.preventDefault()}),window.onboardCallback=a,$("[data-update-rounding-settings]").on("click",function(e){i.updateRoundingSettings(e)}),$("[data-show-rounding-alert]").on("click",function(e){var t=$("[data-rounding-alert]");t.removeClass("hidden");var o=t.offset().top-$(".page-head").height()-45;$("html, body").animate({scrollTop:o},500)})},logoutAccount:function(){$.ajax({url:controllerUrl,type:"POST",data:{ajax:!0,action:"logOutAccount"},success:function(e){e.status&&(document.location=e.redirectUrl)}})},checkRequirements:function(){$.ajax({url:controllerUrl,type:"POST",data:{ajax:!0,action:"CheckCredentials"},success:function(e){$("#btn-check-requirements").closest(".status-block-container").html(e)}})},psCheckoutHandleAction:function(e){null!=e&&$.ajax({url:controllerUrl,type:"POST",data:{ajax:!0,action:"HandlePsCheckoutAction",actionHandled:e},success:function(e){e.redirect&&window.open(e.url,"_blank")}})},updateRoundingSettings:function(e){$.ajax({url:controllerUrl,type:"POST",data:{ajax:!0,action:"UpdateRoundingSettings"},success:function(t){var o=$(e.currentTarget).closest("[data-rounding-alert]");o.length>0&&(o.removeClass("alert-warning").addClass("alert-success"),o.html(t),setTimeout(function(){return o.remove()},5e3))}})}};window.addEventListener("load",function(){return i.init()}),$(window).on("load",function(){return $("[data-paypal-button]").removeClass("spinner-button")})},13:function(e,t,o){"use strict";o.r(t);var n=o(0),a=o(1),i=function(e,t){var o=document.createElement("div"),n=document.createElement("div");return n.innerHTML=e,o.className="alert alert-".concat(t),o.appendChild(n),o},c={init:function(){$("[data-pp-link-settings]").on("click",function(e){var t=$(e.target.attributes.href.value);t.length?Object(n.a)(t):Object(n.b)()}),$(".defaultForm").on("mouseleave",function(e){$(e.currentTarget).removeClass("pp-settings-link-on")}),c.checkConfigurations(),c.updateHookPreview(),$("input").change(c.checkConfigurations),$("select").change(c.checkConfigurations),$(document).on("click","[toggle-style-configuration]",function(e){c.toggleStyleConfiguration(e),c.updatePreviewButton(e),c.updateColorDescription(e)}),$(document).on("change","[customize-style-shortcut-container]",c.updatePreviewButton),$(document).on("change",'[data-type="color"]',c.updateColorDescription),$(document).on("change",".pp-select-preview-container",c.updateHookPreview),$(document).on("change",'[data-type="height"]',c.checkHeight),$(document).on("change",'[data-type="width"]',c.checkWidth),"undefined"!=typeof sectionSelector&&c.scrollTo(sectionSelector)},checkConfigurations:function(){var e=$('input[name="paypal_mb_ec_enabled"]'),t=$('input[name="paypal_api_card"]'),o=["paypal_express_checkout_in_context","paypal_express_checkout_shortcut_cart","paypal_express_checkout_shortcut","paypal_express_checkout_shortcut_signup","paypal_api_advantages","paypal_config_brand","paypal_config_logo"],n=["paypal_vaulting","paypal_merchant_installment"],a=$('[name="paypal_customize_order_status"]'),i=["paypal_os_refunded","paypal_os_canceled","paypal_os_accepted","paypal_os_capture_canceled","paypal_os_waiting_validation","paypal_os_accepted_two","paypal_os_processing","paypal_os_validation_error","paypal_os_refunded_paypal"],r=document.querySelector('[name="PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE"]'),s=$('[name="paypal_express_checkout_shortcut"]'),u=$('[name="paypal_express_checkout_shortcut_cart"]'),l=$('[name="paypal_express_checkout_shortcut_signup"]'),d=document.querySelector('[name="paypal_express_checkout_shortcut"]'),p=document.querySelector('[name="PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_PRODUCT"]'),_=document.querySelector('[name="paypal_express_checkout_shortcut_cart"]'),h=document.querySelector('[name="PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_CART"]'),f=document.querySelector('[name="paypal_express_checkout_shortcut_signup"]'),g=document.querySelector('[name="PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_SIGNUP"]');d.checked&&r.checked?($("[data-section-customize-mode-product]").closest(".form-group").show(),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_PRODUCT"),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_PRODUCT"),"1"===p.value?(c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_PRODUCT"),c.hideConfiguration("productPageWidgetCode")):"2"===p.value&&(c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_PRODUCT"),c.showConfiguration("productPageWidgetCode"))):($("[data-section-customize-mode-product]").closest(".form-group").hide(),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_PRODUCT"),c.hideConfiguration("productPageWidgetCode"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_PRODUCT"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_PRODUCT")),_.checked&&r.checked?($("[data-section-customize-mode-cart]").closest(".form-group").show(),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_CART"),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_CART"),"1"===h.value?(c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_CART"),c.hideConfiguration("cartPageWidgetCode")):"2"===h.value&&(c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_CART"),c.showConfiguration("cartPageWidgetCode"))):($("[data-section-customize-mode-cart]").closest(".form-group").hide(),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_CART"),c.hideConfiguration("cartPageWidgetCode"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_CART"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_CART")),f.checked&&r.checked?($("[data-section-customize-mode-signup]").closest(".form-group").show(),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_SIGNUP"),c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_SIGNUP"),"1"===g.value?(c.showConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_SIGNUP"),c.hideConfiguration("signupPageWidgetCode")):"2"===g.value&&(c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_SIGNUP"),c.showConfiguration("signupPageWidgetCode"))):($("[data-section-customize-mode-signup]").closest(".form-group").hide(),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_SIGNUP"),c.hideConfiguration("signupPageWidgetCode"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_SIGNUP"),c.hideConfiguration("PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_SIGNUP")),e.length>0&&(1==e.prop("checked")?(o.forEach(c.showConfiguration),$(".message-context").show()):(o.forEach(c.hideConfiguration),$(".message-context").hide())),t.length>0&&(1==t.prop("checked")?n.forEach(c.showConfiguration):n.forEach(c.hideConfiguration)),a.length>0&&(1==a.prop("checked")?(i.forEach(c.showConfiguration),$(".advanced-help-message").show()):(i.forEach(c.hideConfiguration),$(".advanced-help-message").hide())),null!==r&&(!0===r.checked&&!1===s.prop("checked")&&!1===u.prop("checked")&&!1===l.prop("checked")?($(".shortcut-customize-style-alert").closest(".form-group").show(),$(".shortcut-customize-style-alert").removeClass("hidden")):($(".shortcut-customize-style-alert").closest(".form-group").hide(),$(".shortcut-customize-style-alert").addClass("hidden")))},hideConfiguration:function(e){var t='[name="'.concat(e,'"]');$(t).closest(".col-lg-9").closest(".form-group").hide()},showConfiguration:function(e){var t='[name="'.concat(e,'"]');$(t).closest(".col-lg-9").closest(".form-group").show()},toggleStyleConfiguration:function(e){var t=$(e.target),o=t.closest("[customize-style-shortcut-container]").find("[configuration-section]"),n=t.closest("[customize-style-shortcut-container]").find("[preview-section]");o.hasClass("hidden")?(t.find("i").addClass("icon-remove"),t.find("i").removeClass("icon-edit"),o.removeClass("hidden"),n.removeClass("invisible")):(t.find("i").removeClass("icon-remove"),t.find("i").addClass("icon-edit"),o.addClass("hidden"),n.addClass("invisible"))},updatePreviewButton:function(e){var t=$(e.target).closest("[customize-style-shortcut-container]"),o=t.find("[preview-section]").find("[button-container]"),n=t.find("[configuration-section]"),a=n.find('[data-type="color"]').val(),i=n.find('[data-type="shape"]').val(),c=n.find('[data-type="label"]').val(),r=n.find('[data-type="width"]').val(),s=n.find('[data-type="height"]').val();$.ajax({url:controllerUrl,type:"POST",dataType:"JSON",data:{ajax:!0,action:"getShortcut",color:a,shape:i,label:c,height:s,width:r},success:function(e){"content"in e&&o.html(e.content)}})},updateColorDescription:function(e){var t=$(e.target).closest("[customize-style-shortcut-container]"),o=t.find('[data-type="color"]').val();t.find("[after-select-content] [data-color]").hide(),"gold"===o?t.find('[after-select-content] [data-color="gold"]').show():"blue"===o?t.find('[after-select-content] [data-color="blue"]').show():["silver","white","black"].includes(o)&&t.find('[after-select-content] [data-color="other"]').show()},updateHookPreview:function(){$(".pp-select-preview-container").each(function(e,t){var o=(t=$(t)).find("option:selected").attr("data-preview-image");t.find(".pp-preview").css("background-image","url(".concat(o,")"))})},checkHeight:function(e){var t=$(e.target).closest("[chain-input-container]"),o=t.closest("[field]").find("[msg-container]"),n=t.find('[data-type="height"]'),a=n.val(),c=null;return"undefined"==a||(((a=parseInt(a))>55||a<25)&&(c=i(n.attr("data-msg-error"),"danger")),null==c?(o.html(""),!0):(o.html(c),!0))},checkWidth:function(e){var t=$(e.target).closest("[chain-input-container]"),o=t.closest("[field]").find("[msg-container]"),n=t.find('[data-type="width"]'),a=n.val(),c=null;return"undefined"==a||((a=parseInt(a))<150&&(c=i(n.attr("data-msg-error"),"danger")),null==c?(o.html(""),!0):(o.html(c),!0))},scrollTo:function(e){var t=$(sectionSelector);$("html, body").animate({scrollTop:t.offset().top-200+"px"},900)}};$(document).ready(function(){c.init(),$(".install-ps-checkout").click(function(){a.SetupAdmin.psCheckoutHandleAction("install")})})}});
//# sourceMappingURL=adminCheckout.js.map