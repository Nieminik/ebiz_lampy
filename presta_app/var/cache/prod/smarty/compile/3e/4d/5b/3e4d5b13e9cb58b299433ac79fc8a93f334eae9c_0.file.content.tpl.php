<?php
/* Smarty version 3.1.33, created on 2020-12-12 01:34:40
  from '/var/www/html/admin832wub8sz/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd410200bd857_47989069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e4d5b13e9cb58b299433ac79fc8a93f334eae9c' => 
    array (
      0 => '/var/www/html/admin832wub8sz/themes/new-theme/template/content.tpl',
      1 => 1600973848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd410200bd857_47989069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
