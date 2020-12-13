<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:25:40
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd616541c6613_45825724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754169a85102b809761f4582497ec3da486de4dd' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/listing.tpl',
      1 => 1607590496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd616541c6613_45825724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="reminder_listing" class="panel panel-default col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Block Content','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

      <span class="psre-add"><i class="material-icons">add_circle</i></span>
    </div>
    <div class="panel-body first-body">
        <div class="clearfix">
            <div class="listing-table col-xs-12">
                <div class="listing-head row">
                    <div class="col-xs-1 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                    <div class="col-xs-1 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                    <div class="col-xs-2 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                    <div class="col-xs-4 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                    <div class="col-xs-2 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redirection','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                    <div class="col-xs-2 content-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="listing-body col-lg-12  col-xs-12">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allblock']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
                        <div data-id='' class="listing-general-rol row"
                             data-block='<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
'>
                            <div class="listing-row row">
                                <div class="col-xs-1">
                                    <i class="material-icons">drag_indicator</i>
                                </div>
                                <div class="col-xs-1">
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                                        <img class="svg"
                                             src="<?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['icon'];
} elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['custom_icon'];
}?>"
                                        />
                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </div>
                                <div class="col-xs-2">
                                    <?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>

                                </div>
                                <div class="col-xs-4">
                                    <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

                                </div>
                                <div class="col-xs-2">
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['type_link'] == $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type_link'] == $_smarty_tpl->tpl_vars['LINK_TYPE_URL']->value) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Url link','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type_link'] == $_smarty_tpl->tpl_vars['LINK_TYPE_CMS']->value) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CMS Page','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </div>
                                <div class="col-xs-2 inline-flex">
                                    <label class="col-lg-12 col-xs-12"
                                           id="reminder_active_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
"
                                           for="reminder_active_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
"
                                           data-cart_psreassurance_id='<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
'>
                                        <section class="switch-input <?php if ($_smarty_tpl->tpl_vars['block']->value['status']) {?>-checked<?php }?>">
                                            <input data-toggle="switch" class="switch-new" data-inverse="true"
                                                   type="checkbox" name="reminder_active_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
"
                                                   checked="">
                                        </section>
                                        <span class="switch_text switch-on" style="<?php if (!$_smarty_tpl->tpl_vars['block']->value['status']) {?>display:none;<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activated','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</span>
                                        <span class="switch_text switch-off" style="<?php if ($_smarty_tpl->tpl_vars['block']->value['status']) {?>display:none;<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deactivated','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</span>
                                    </label>

                                    <span class="psre-edit" data-id="<?php echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];?>
"><i
                                                class="material-icons">edit</i></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div id="_more_info" class="col-lg-12 more_info ajax_return"></div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="msgRecommendation">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend 3 blocks at maximum.','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

        </div>
    </div>
</div>
<?php }
}
