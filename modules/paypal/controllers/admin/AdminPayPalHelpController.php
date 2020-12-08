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

require_once _PS_MODULE_DIR_ . 'paypal/vendor/autoload.php';

use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use PaypalAddons\classes\AdminPayPalController;

class AdminPayPalHelpController extends AdminPayPalController
{
    public function init()
    {
        parent::init();

	    if (Tools::isSubmit('registerHooks')) {
            if ($this->registerHooks()) {
                $this->confirmations[] = $this->l('Hooks successfully registered');
            }
        }
    }

    public function initContent()
    {
        parent::initContent();

        $countryDefault = new Country((int)\Configuration::get('PS_COUNTRY_DEFAULT'), $this->context->language->id);
        $need_rounding = false;

        if (Configuration::get('PS_ROUND_TYPE') != Order::ROUND_ITEM) {
            $need_rounding = true;
        }

        if (Configuration::get('PS_PRICE_ROUND_MODE') != PS_ROUND_HALF_UP) {
            $need_rounding = true;
        }

        if (defined('_PS_PRICE_COMPUTE_PRECISION_') && (int)_PS_PRICE_COMPUTE_PRECISION_ != 2) {
            $need_rounding = true;
        }

        $tpl_vars = array(
            'need_rounding' => $need_rounding,
            'psCheckoutBtnText' => $this->getCheckoutBtnText(),
            'showPsCheckout' => in_array($countryDefault->iso_code, $this->module->countriesApiCartUnavailable)
        );

        $this->context->smarty->assign($tpl_vars);
        $this->content = $this->context->smarty->fetch($this->getTemplatePath() . 'help.tpl');
        $this->context->smarty->assign('content', $this->content);
        $this->addJS(_PS_MODULE_DIR_ . $this->module->name . '/views/js/helpAdmin.js');
    }

    protected function getCheckoutBtnText()
    {
        $moduleManagerBuilder = ModuleManagerBuilder::getInstance();
        $moduleManager = $moduleManagerBuilder->build();

        if ($moduleManager->isInstalled('ps_checkout')) {
            $psCheckoutBtnText = $this->l('Configure PrestaShop Checkout');
        } elseif (is_dir(_PS_MODULE_DIR_ . 'ps_checkout')) {
            $psCheckoutBtnText = $this->l('Install PrestaShop Checkout');
        } else {
            $psCheckoutBtnText = $this->l('Download PrestaShop Checkout');
        }

        return $psCheckoutBtnText;
    }

    public function displayAjaxCheckCredentials()
    {
        $response = new JsonResponse($this->_checkRequirements());
        return $response->send();
    }

    public function registerHooks()
    {
        $result = true;
        $hooksUnregistered = $this->module->getHooksUnregistered();

        if (empty($hooksUnregistered)) {
            return $result;
        }

        foreach ($hooksUnregistered as $hookName) {
            $result &= $this->module->registerHook($hookName);
        }

        return $result;
    }
}
