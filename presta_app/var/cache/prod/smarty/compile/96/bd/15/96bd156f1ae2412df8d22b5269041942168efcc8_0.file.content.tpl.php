<?php
/* Smarty version 3.1.33, created on 2020-12-12 01:34:52
  from '/var/www/html/admin832wub8sz/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd4102ce6e2d8_87568799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96bd156f1ae2412df8d22b5269041942168efcc8' => 
    array (
      0 => '/var/www/html/admin832wub8sz/themes/default/template/content.tpl',
      1 => 1600973848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4102ce6e2d8_87568799 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
