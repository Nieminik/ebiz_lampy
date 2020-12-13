<?php
/* Smarty version 3.1.33, created on 2020-12-13 13:30:54
  from '/var/www/html/modules/sendinblue/views/templates/admin/keyform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd6097e483027_37073216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27fec4f5d6c472027f8360b316ce87517ecec477' => 
    array (
      0 => '/var/www/html/modules/sendinblue/views/templates/admin/keyform.tpl',
      1 => 1607862630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd6097e483027_37073216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    </div>
        <div class="form-box">
            <form method="post" action="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form_url']->value,'htmlall','UTF-8' )),'&amp;','&');?>
">
            <input type ="hidden" name="customtoken" id="customtoken" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customtoken']->value,'htmlall','UTF-8' )));?>
">
            <input type ="hidden" name="langvalue" id="langvalue" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langvalue']->value,'htmlall','UTF-8' )));?>
">
            <input type ="hidden" name="id_shop_group" id="id_shop_group" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop_group']->value,'htmlall','UTF-8' )));?>
">
            <input type ="hidden" name="id_shop" id="id_shop" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop']->value,'htmlall','UTF-8' )));?>
">
            <input type ="hidden" name="defaultnlmsg" id="defaultnlmsg" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to set up PrestaShop Newsletter module on your Prestashop back office before using it','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
            <input type ="hidden" name="iso_code" id="iso_code" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'htmlall','UTF-8' )));?>
"><div class="form-box">
            <h2 class="heading">
            <svg viewBox="0 0 512 512" style="width:16px !important; height:16px !important; display:inline !important;padding: 0 2px 0 0 !important;vertical-align: middle !important;">
                <title>Sendinblue</title>
                    <path fill="#ffffff" d="M473.722 127.464c-18.027-31.901-48.272-55.215-83.865-64.647a142.257 142.257 0 0 0-22.471-3.885C342.065 22.06 300.026 0 255.08 0c-44.944 0-86.983 22.06-112.304 58.932C98.157 63.142 58.4 88.68 36.24 127.365a139.082 139.082 0 0 0-5.316 127.402 139.674 139.674 0 0 0 5.316 127.104c18.053 31.879 48.287 55.184 83.865 64.647a130.245 130.245 0 0 0 22.973 3.885c25.261 36.958 67.322 59.087 112.304 59.087 44.983 0 87.043-22.13 112.305-59.087 44.638-4.161 84.414-29.71 106.536-68.433a138.588 138.588 0 0 0 5.317-127.402 139.379 139.379 0 0 0-5.818-127.104zm-33.861 20.14c10.8 18.89 14.88 40.769 11.6 62.186a140.27 140.27 0 0 0-24.015-17.568c-31.777-18.423-69.787-23.497-105.428-14.074-21.674 5.722-41.612 16.51-58.107 31.442-6.093-38.506 12.271-76.783 46.404-96.722 21.403-12.61 47.09-16.21 71.235-9.981 24.815 6.533 45.86 22.673 58.31 44.717zM254.813 44.955c21.153.117 41.612 7.52 57.892 20.948a140.215 140.215 0 0 0-27.272 12.04c-50.843 30.193-76.605 89.302-63.996 146.832-35.486-14.33-58.666-48.648-58.581-86.729-.22-50.807 40.858-92.26 91.957-92.797v-.294zM71.075 149.893c10.763-18.148 27.595-32.249 47.752-40.003a134.308 134.308 0 0 0-3.455 29.342c-.174 58.952 39.193 111.274 97.433 129.495-10.376 8.36-22.506 14.466-35.56 17.898-24.037 6.26-49.683 2.91-71.118-9.291-45.903-26.087-61.706-82.724-35.56-127.441h.508zm-.458 211.901c-10.82-18.85-14.87-40.716-11.503-62.094a144.971 144.971 0 0 0 23.922 17.57c21.096 12.2 45.136 18.646 69.627 18.668a142.451 142.451 0 0 0 35.831-4.692c21.69-5.7 41.64-16.493 58.125-31.446 6.072 38.511-12.239 76.793-46.316 96.835-21.417 12.59-47.102 16.188-71.256 9.983-25.019-6.331-46.312-22.417-58.939-44.524l.51-.3zm185.12 102.546c-21.194-.131-41.677-7.601-57.917-21.121a133.872 133.872 0 0 0 27.284-11.832c50.865-30.16 76.638-89.204 64.024-146.672 41.267 16.713 65.055 59.88 56.975 103.392-8.08 43.51-45.809 75.421-90.366 76.428v-.195zm174.56-104.781c-10.365 18.23-26.73 32.368-46.35 40.041a132.315 132.315 0 0 0 3.353-29.37c.138-58.999-38.063-111.355-94.575-129.62a91.453 91.453 0 0 1 34.516-17.915c23.401-6.086 48.285-2.557 69.033 9.79 44.263 26.268 59.358 82.778 34.024 127.368v-.294z"/>
                </svg>
                <span style="vertical-align: middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activation','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</span></h2>
            <div class="form-box-content">
            <div class="row"><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate the Sendinblue plugin?','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</label><div style="padding-top:5px">
            <label class="differ-radio-btn"><input type="radio" id="y" class="keyyes"
            name="status" value="1"
            <?php if (!empty($_smarty_tpl->tpl_vars['key_status']->value)) {?>checked="checked"<?php }?> /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl ) );?>

            </span></label><label class="differ-radio-btn"><input type="radio"  id="n" class="keyyes differ-radio-btn"
            name="status" value="0"
            <?php if (empty($_smarty_tpl->tpl_vars['key_status']->value)) {?>checked="checked"<?php }?> /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl ) );?>

            </span></label></div></div><div class="clear"></div>
            <div class="row"><div id="apikeybox" <?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['str']->value,'htmlall','UTF-8' )));?>
><label class="key"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API key','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</label>
            <div class="key">
            <input type="text" name="apikey" id="apikeys" value="<?php echo stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['api_key']->value,'htmlall','UTF-8' )));?>
" />&nbsp;
            <span class="toolTip"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter your API key from your Sendinblue account and if you don\'t have it yet, please go to www.sendinblue.com and subscribe. You can then get the API key from https://my.sendinblue.com/integration','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
            &nbsp;</span>
            </div>
            </div>
            </div>
            <div class="row>"<div class="clear pspace">
            <label>&nbsp;</label><input type="submit" name="submitUpdate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl ) );?>
" class="blue-btn" />&nbsp;
            </div><div class="clear"></div>
            </div>
            </div>
            </form>
			</div>
		</div>
	</div>

<?php }
}
