<?php
/* Smarty version 3.1.33, created on 2020-12-13 13:30:54
  from 'module:psmboviewstemplateshookre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd6097e60e6e8_02215091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:psmboviewstemplateshookre',
      1 => 1604516422,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd6097e60e6e8_02215091 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript' ));?>
',
        'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript' ));?>
',
      },
      recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript' ));?>
',
      shouldAttachRecommendedModulesAfterContent: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value);?>
,
      shouldAttachRecommendedModulesButton: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value);?>
,
      shouldUseLegacyTheme: <?php echo intval($_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value);?>
,
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
