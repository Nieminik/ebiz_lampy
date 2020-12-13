<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:05:57
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd611b5ddd8e5_82888889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69dc85c12ee239514e85b3be14533b422f0d428d' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl',
      1 => 1607590502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd611b5ddd8e5_82888889 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
