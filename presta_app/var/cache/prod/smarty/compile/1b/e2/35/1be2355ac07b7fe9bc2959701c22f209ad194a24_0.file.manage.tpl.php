<?php
/* Smarty version 3.1.33, created on 2020-12-12 19:22:24
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd50a60971403_18263122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be2355ac07b7fe9bc2959701c22f209ad194a24' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/manage.tpl',
      1 => 1607590502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages.tpl' => 1,
  ),
),false)) {
function content_5fd50a60971403_18263122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./_partials/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexes and caches','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h3>
  <div id="indexing-warning" class="alert alert-warning" style="display: none">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexing is in progress. Please do not leave this page','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

  </div>
  <div class="row">
	<p>
	  <a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Index all missing prices','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rebuild entire price index','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build attributes and features indexes','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	  <a class="ajaxcall btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['clear_cache_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear cache','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	</p>
  </div>
  <div class="row">
	<div class="alert alert-info">
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a cron job that will rebuild price index using the following URL:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

	  <br>
	  <strong><?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
</strong>
	  <br>
	  <br>
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a cron job that will rebuild attribute index using the following URL:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

	  <br>
	  <strong><?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
</strong>
	</div>
  </div>
  <div class="row">
	<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A nightly rebuild is recommended.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</div>
  </div>
</div>
<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters templates','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['filters_templates']->value);?>
</span></h3>
  <?php if (count($_smarty_tpl->tpl_vars['filters_templates']->value) > 0) {?>
	<div class="row">
	  <table class="table">
		<thead>
		  <tr>
			<th class="fixed-width-xs center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th><span class="title_box text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-sm center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created on','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span></th>
			<th class="fixed-width-sm"><span class="title_box text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span></th>
		  </tr>
		</thead>
		<tbody>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
			<tr>
			  <td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
</td>
			  <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</td>
			  <td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['n_categories'];?>
</td>
			  <td><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['template']->value['date_add'],null,true);?>
</td>
			  <td>
				<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
				  <div class="btn-group-action">
					<div class="btn-group pull-right">
					  <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;edit_filters_template=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" class="btn btn-default">
						<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					  </a>
					  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>&nbsp;
					  </button>
					  <ul class="dropdown-menu">
						<li>
						  <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;deleteFilterTemplate=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
"
						     onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this filter template?','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
');">
							<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						  </a>
						</li>
					  </ul>
					</div>
				  </div>
				<?php }?>
			  </td>
			</tr>
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	  </table>
	  <div class="clearfix">&nbsp;</div>
	</div>
  <?php } else { ?>
	<div class="row alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filter template found.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</div>
  <?php }?>
  <?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="panel-footer">
	  <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;add_new_filters_template=1"><i class="process-icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new template','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</a>
	</div>
  <?php }?>
</div>
<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</h3>
  <form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal">
	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable cache system','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_cache_enabled" id="ps_layered_cache_enabled_on" value="1"<?php if ($_smarty_tpl->tpl_vars['cache_enabled']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_cache_enabled_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_cache_enabled" id="ps_layered_cache_enabled_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['cache_enabled']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_cache_enabled_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show the number of matching products','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_show_qties_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_show_qties_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products from subcategories','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_on" value="1"<?php if ($_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_full_tree_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_full_tree_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products only from default category','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_by_default_category" id="ps_layered_filter_by_default_category_on" value="1"<?php if ($_smarty_tpl->tpl_vars['filter_by_default_category']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_by_default_category_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_by_default_category" id="ps_layered_filter_by_default_category_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['filter_by_default_category']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_by_default_category_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	  <div class="col-lg-9 col-lg-offset-3">
		<div class="help-block">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Works only if "Show products from subcategories" is off.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		</div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category filter depth (0 for no limits, 1 by default)','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<input type="text" name="ps_layered_filter_category_depth" value="<?php if ($_smarty_tpl->tpl_vars['category_depth']->value !== false) {
echo $_smarty_tpl->tpl_vars['category_depth']->value;
} else { ?>1<?php }?>" class="fixed-width-sm" />
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use tax to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_price_usetax_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
		  <label for="ps_layered_filter_price_usetax_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use rounding to filter price','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_price_rounding_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_price_rounding_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show unavailable, out of stock last','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	  <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
		  <input type="radio" name="ps_layered_filter_show_out_of_stock_last" id="ps_layered_filter_show_out_of_stock_last_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_out_of_stock_last']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_show_out_of_stock_last_on" class="radioCheck">
			<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <input type="radio" name="ps_layered_filter_show_out_of_stock_last" id="ps_layered_filter_show_out_of_stock_last_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_out_of_stock_last']->value) {?> checked="checked"<?php }?>/>
		  <label for="ps_layered_filter_show_out_of_stock_last_off" class="radioCheck">
			<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		  </label>
		  <a class="slide-button btn"></a>
		</span>
	  </div>
	</div>

	<div class="panel-footer">
	  <button type="submit" class="btn btn-default pull-right" name="submitLayeredSettings"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
	</div>
  </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  <?php if (isset($_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value)) {?>var PS_LAYERED_INDEXED = <?php echo $_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value;?>
;<?php }?>
  var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
  var id_lang = <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
;
  var base_folder = '<?php echo $_smarty_tpl->tpl_vars['base_folder']->value;?>
';
  var translations = new Object();

  translations.in_progress = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.url_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.attribute_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.url_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.attribute_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_finished = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing finished','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_failed = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing failed','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.price_indexation_in_progress = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress, %s products price to index)','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.loading = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.delete_all_filters_templates = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You selected -All categories-: all existing filter templates will be deleted. Is it OK?','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
  translations.no_selected_categories = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one category','js'=>1,'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php }
}
