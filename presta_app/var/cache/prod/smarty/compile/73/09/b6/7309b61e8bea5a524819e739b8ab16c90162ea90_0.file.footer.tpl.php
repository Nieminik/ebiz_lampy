<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:05:57
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd611b5e80be5_37950573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7309b61e8bea5a524819e739b8ab16c90162ea90' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl',
      1 => 1607590502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd611b5e80be5_37950573 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-footer" id="toolbar-footer">
  <button class="btn btn-default pull-right" id="submit-filter" name="SubmitFilter" type="submit"><i class="process-icon-save"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</span></button>
  <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
    <i class="process-icon-cancel"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</span>
  </a>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  var translations = new Array();
  <?php if (isset($_smarty_tpl->tpl_vars['filters']->value)) {?>var filters = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filters']->value ));?>
';<?php }?>
  translations['no_selected_categories'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one category','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
";
  translations['no_selected_filters'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<?php }
}
