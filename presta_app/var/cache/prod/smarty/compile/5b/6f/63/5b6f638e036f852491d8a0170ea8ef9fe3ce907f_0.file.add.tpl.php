<?php
/* Smarty version 3.1.33, created on 2020-12-12 19:26:11
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd50b4396a7c2_00765374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6f638e036f852491d8a0170ea8ef9fe3ce907f' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/add.tpl',
      1 => 1607590502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages.tpl' => 1,
    'file:./_functions/show_limit.tpl' => 1,
    'file:./_partials/header.tpl' => 1,
    'file:./_partials/categories-tree.tpl' => 1,
    'file:./_partials/shops.tpl' => 1,
    'file:./_partials/footer.tpl' => 1,
  ),
),false)) {
function content_5fd50b4396a7c2_00765374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./_partials/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./_functions/show_limit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New filters template','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h3>

  <form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal" onsubmit="return checkForm();">
    <input type="hidden" name="id_layered_filter" id="id_layered_filter" value="<?php echo $_smarty_tpl->tpl_vars['id_layered_filter']->value;?>
" />

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/categories-tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/shops.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="form-group">
      <label class="control-label col-lg-3">
        <span class="badge" id="selected_filters">0</span>
        <span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can drag and drop filters to adjust position','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
      </label>
      <div class="col-lg-9">
        <section class="filter_panel">
          <header class="clearfix">
            <span class="badge pull-right">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total filters: %s','sprintf'=>array($_smarty_tpl->tpl_vars['total_filters']->value),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

            </span>
          </header>
          <section class="filter_list">
            <ul class="list-unstyled sortable">
              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_subcategories" id="layered_selection_subcategories" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub-categories filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h4>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_subcategories"), true);?>

                  </div>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <select name="layered_selection_subcategories_filter_type">
                      <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                    </select>
                  </div>
                </div>
              </li>

              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_stock" id="layered_selection_stock" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <span class="module_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product stock filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_stock"), true);?>

                  </div>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <select name="layered_selection_stock_filter_type">
                      <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_condition" id="layered_selection_condition" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <span class="module_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product condition filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_condition"), true);?>

                  </div>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <select name="layered_selection_condition_filter_type">
                      <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_manufacturer" id="layered_selection_manufacturer" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <span class="module_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product brand filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_manufacturer"), true);?>

                  </div>
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <select name="layered_selection_manufacturer_filter_type">
                      <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                      <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_weight_slider" id="layered_selection_weight_slider" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <span class="module_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product weight filter (slider)','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-lg-3 pull-right">
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <input type="hidden" name="layered_selection_weight_slider_filter_type" value="1">
                    <p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of ranges','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
                  </div>
                </div>
              </li>
              <li class="filter_list_item row" draggable="true">
                <div class="col-lg-2">
                  <label class="switch-light prestashop-switch fixed-width-lg">
                    <input name="layered_selection_price_slider" id="layered_selection_price_slider" type="checkbox" />
                    <span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                    </span>
                    <a class="slide-button btn"></a>
                  </label>
                </div>
                <div class="col-lg-4">
                  <span class="module_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product price filter (slider)','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-lg-3 pull-right">
                </div>
                <div class="col-lg-3 pull-right">
                  <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6">
                    <input type="hidden" name="layered_selection_price_slider_filter_type" value="1">
                    <p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of ranges','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
                  </div>
                </div>
              </li>
              <?php if (count($_smarty_tpl->tpl_vars['attribute_groups']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_groups']->value, 'attribute_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute_group']->value) {
?>
                  <li class="filter_list_item row" draggable="true">
                    <div class="col-lg-2">
                      <label class="switch-light prestashop-switch fixed-width-lg">
                        <input name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" id="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" type="checkbox" />
                        <span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                        </span>
                        <a class="slide-button btn"></a>
                      </label>
                    </div>
                    <div class="col-lg-4">
                      <span class="module_name">
                        <?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['n'] > 1) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute group: %name% (%count% attributes)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute group: %name% (%count% attribute)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['is_color_group']) {?>
                          <img src="../img/admin/color_swatch.png" alt="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This group will allow user to select a color','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
" />
                        <?php }?>
                      </span>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <?php ob_start();
echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_ag_".$_prefixVariable1), true);?>

                      </div>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_type">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        </select>
                      </div>
                    </div>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>

              <?php if (count($_smarty_tpl->tpl_vars['features']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                  <li class="filter_list_item row" draggable="true">
                    <div class="col-lg-2">
                      <label class="switch-light prestashop-switch fixed-width-lg">
                        <input name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" id="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" type="checkbox" />
                        <span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                        </span>
                        <a class="slide-button btn"></a>
                      </label>
                    </div>
                    <div class="col-lg-4">
                      <span class="module_name">
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['n'] > 1) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: %name% (%count% values)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['feature']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['feature']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: %name% (%count% value)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['feature']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['feature']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php }?>
                      </span>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <?php ob_start();
echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_limit_select', array('element'=>"layered_selection_feat_".$_prefixVariable2), true);?>

                      </div>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_type">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        </select>
                      </div>
                    </div>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
          </section>
        </section>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </form>
</div>
<?php }
}
