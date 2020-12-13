<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:08:39
  from 'module:paypalviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd61257cacd34_20575057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffea87e3807e697178ee8347672b825b80d76d45' => 
    array (
      0 => 'module:paypalviewstemplatesfront',
      1 => 1607590616,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:paypal/views/templates/front/_partials/verified_user.tpl' => 1,
    'module:paypal/views/templates/front/_partials/language.tpl' => 1,
    'module:paypal/views/templates/front/_partials/offline_bolt.tpl' => 1,
    'module:paypal/views/templates/front/_partials/monetization.tpl' => 1,
  ),
),false)) {
function content_5fd61257cacd34_20575057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'data_content', 'data_content', null);?>
  <div class="pp-info" data-pp-info>
    <div class="row">
      <div class="col-md-6 item pp__mb-3">
          <?php $_smarty_tpl->_subTemplateRender('module:paypal/views/templates/front/_partials/verified_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Safer and more protected','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
        <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buyer protection and free return shipping covers eligible purchase.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      </div>
      <div class="col-md-6 item pp__mb-3">
          <?php $_smarty_tpl->_subTemplateRender('module:paypal/views/templates/front/_partials/language.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple and convenient','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
        <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use your account from wherever in the world you shop.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 item pp__mb-3">
          <?php $_smarty_tpl->_subTemplateRender('module:paypal/views/templates/front/_partials/offline_bolt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wherever you are','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
        <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay fast from any device without entering your financial details.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      </div>
      <div class="col-md-6 item pp__mb-3">
          <?php $_smarty_tpl->_subTemplateRender('module:paypal/views/templates/front/_partials/monetization.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No additional fees','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
        <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip entering your financial info, PayPal keeps your data secure.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div data-paypal-info class="pp__pl-2 pp__d-table-cell">
  <a href="#"
     class="pp__text-primary"
     data-paypal-info-popover
     data-html="true"
     data-container="body"
     data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_content']->value, ENT_QUOTES, 'UTF-8');?>
"
  >
    <i class="material-icons">info</i>
  </a>
</div>
<?php }
}
