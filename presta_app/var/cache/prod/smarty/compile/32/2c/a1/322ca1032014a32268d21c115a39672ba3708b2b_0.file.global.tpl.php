<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:25:40
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/global.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd616543f0102_74419264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322ca1032014a32268d21c115a39672ba3708b2b' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/global.tpl',
      1 => 1607590496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd616543f0102_74419264 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default col-lg-12 col-xs-12">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header position on all pages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook">
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img js-show-all" name="PSR_HOOK_HEADER" value="2" id="PSR_HOOK_HEADER"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value == 2) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_HEADER"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Above header','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayTop_active.jpg" width="150" height="150"
                     class="psr-header-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value == 2) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayTop_inactive.jpg" width="150" height="150"
                     class="psr-header-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value != 2) {?>active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_HEADER" value="1" id="PSR_HOOK_HEADER_0"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value == 1) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_HEADER_0"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below header','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayHome_active.jpg" width="150" height="150"
                     class="psr-header-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value == 1) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayHome_inactive.jpg" width="150" height="150"
                     class="psr-header-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value != 1) {?> active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_HEADER" value="0" id="PSR_HOOK_HEADER_1"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_header']->value == 0) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_HEADER_1"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
allpage_none.jpg" width="150" height="150" />
            </div>

        </label>
    </div>

</div>

<div class="panel panel-default col-lg-12 col-xs-12">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer position on all pages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook">
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img js-show-all" name="PSR_HOOK_FOOTER" value="2" id="PSR_HOOK_FOOTER"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value == 2) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_FOOTER"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Above footer','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayFooterBefore_active.jpg" width="150" height="150"
                     class="psr-footer-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value == 2) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayFooterBefore_inactive.jpg" width="150" height="150"
                     class="psr-footer-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value != 2) {?> active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_FOOTER" value="1" id="PSR_HOOK_FOOTER_0"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value == 1) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_FOOTER_0"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below footer','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayFooter_active.jpg" width="150" height="150"
                     class="psr-footer-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value == 1) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayFooter_inactive.jpg" width="150" height="150"
                     class="psr-footer-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value != 1) {?> active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_FOOTER" value="0" id="PSR_HOOK_FOOTER_1"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_footer']->value == 0) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_FOOTER_1"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
allpage_none.jpg" width="150" height="150" />
            </div>
        </label>
    </div>
</div>
<?php }
}
