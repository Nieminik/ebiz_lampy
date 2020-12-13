<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:25:40
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd616543ada22_69311833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31784c67eab85cef85e98d86d736aa509bbbde9c' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display.tpl',
      1 => 1607590496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./display/global.tpl' => 1,
    'file:./display/product.tpl' => 1,
    'file:./display/checkout.tpl' => 1,
  ),
),false)) {
function content_5fd616543ada22_69311833 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modulecontent module_display" class="clearfix">
    <div id="menu" class="col-lg-2 col-xs-2">
        <div class="list-group" v-on:click.prevent>
            <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('global') }" v-on:click="makeActive('global')">
                <i class="fa fa-cog"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Global settings','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </a>
            <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('product') }" v-on:click="makeActive('product')">
                <i class="fa fa-book"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product pages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </a>
            <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('checkout') }" v-on:click="makeActive('checkout')">
                <i class="fa fa-clock-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout pages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </a>
        </div>
    </div>
    <div class="col-lg-9 col-xs-9">
                <div id="global" class="psr_menu addons-hide">
            <?php $_smarty_tpl->_subTemplateRender("file:./display/global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="product" class="psr_menu addons-hide">
            <?php $_smarty_tpl->_subTemplateRender("file:./display/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="checkout" class="psr_menu addons-hide">
            <?php $_smarty_tpl->_subTemplateRender("file:./display/checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
  var currentPage = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentPage']->value,'htmlall','UTF-8' ));?>
";
  var moduleAdminLink = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
";
<?php echo '</script'; ?>
>

<?php }
}
