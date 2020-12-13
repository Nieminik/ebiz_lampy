<?php
/* Smarty version 3.1.33, created on 2020-12-11 15:35:27
  from '/var/www/html/modules/ps_googleanalytics/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd383af504d69_48084604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdca00a4e0f6ed4c04a1bfc9e2d31986d638b8c3' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/admin/configuration.tpl',
      1 => 1607590913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd383af504d69_48084604 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<div class="row" id="google_analytics_top">
		<div class="col-lg-6">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/ga_logo.png" alt="Google Analytics" />
		</div>
		<div class="col-lg-6 text-right">
			<a href="https://support.google.com/analytics/answer/1008015" rel="external"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/create_account_btn.png" alt="" /></a>
		</div>
	</div>
	<hr/>
	<div id="google_analytics_content">
		<div class="row">
			<div class="col-lg-6">
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers go everywhere; shouldn\'t your analytics.','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>

				</p><p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tables and smartphones. That makes it easier to serve your current customers and win new ones.','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>

				</p>
				<p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With ecommerce functionality in Google Analytics you can gain clear insight into important metrics about shopper behavior and conversion, including:','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</b></p>
				<div id="advantages_list">
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/product_detail_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail views','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/merchandising_tools_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal merchandising Success','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/add_to_cart_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"Add to cart" actions','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/checkout_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The checkout process','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/campaign_clicks_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal campaign clicks','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/purchase_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And purchase','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</div>
				</div>
			</div>
			<div class="col-lg-6 text-center">
				<p>
					<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/stats.png" alt="" /><br />
					<span class="small"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchants are able to understand how far along users get in the buying process and where they are dropping off.','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</em></span>
				</p>
				<p class="text-right">
					<b><a href="https://support.google.com/analytics/answer/1008015" rel="external"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account to get started.','d'=>'Modules.GAnalytics.Admin'),$_smarty_tpl ) );?>
</a></b>
				</p>
			</div>
		</div>
	</div>
</div>
<?php }
}
