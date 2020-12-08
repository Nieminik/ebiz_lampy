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

namespace PaypalAddons\classes\Shortcut;

use Context;
use Media;
use Module;
use PaypalAddons\classes\AbstractMethodPaypal;
use Symfony\Component\VarDumper\VarDumper;

abstract class ShortcutAbstract
{
    /** @var Context*/
    protected $context;

    /** @var Module*/
    protected $module;

    /** @var AbstractMethodPaypal*/
    protected $method;

    public function __construct()
    {
        $this->context = Context::getContext();
        $this->module = Module::getInstanceByName('paypal');
        $this->method = AbstractMethodPaypal::load($this->getMethodType());
    }

    /**
     * @return string html
     */
    public function render()
    {
        $this->context->smarty->assign($this->getTplVars());
        $this->context->smarty->assign('JSvars', $this->getJSvars());
        $this->context->smarty->assign('JSscripts', $this->getJS());
        return $this->context->smarty->fetch($this->getTemplatePath());
    }

    /**
     * @return []
     */
    protected function getJSvars()
    {
        $JSvars = [];
        $JSvars['sc_init_url'] = $this->context->link->getModuleLink($this->module->name, 'ScInit', array(), true);
        $JSvars['scOrderUrl'] = $this->context->link->getModuleLink($this->module->name, 'scOrder', array(), true);

        return $JSvars;
    }

    /**
     * @return []
     */
    protected function getJS()
    {
        $JSscripts = [];

        foreach (Media::getJqueryPath() as $lib) {
            $JSscripts[] = $lib;
        }

        $JSscripts[] = $this->method->getUrlJsSdkLib();
        $JSscripts[] = '/modules/' . $this->module->name . '/views/js/shortcut.js?v=' . $this->module->version;

        return $JSscripts;
    }

    /**
     * @return string|null
     */
    protected function getMethodType()
    {
        return null;
    }

    /**
     * @return string
     */
    protected function getTemplatePath()
    {
        return 'module:paypal/views/templates/shortcut/shortcut-layout.tpl';
    }

    /**
     * @return []
     */
    abstract protected function getTplVars();
}
