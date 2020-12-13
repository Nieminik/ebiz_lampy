<?php
/* Smarty version 3.1.33, created on 2020-12-12 18:06:55
  from '/var/www/html/admin832wub8sz/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd4f8aff1d844_65550980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d4d2668e263ab83ed36fb25d6ca7177253cc8e' => 
    array (
      0 => '/var/www/html/admin832wub8sz/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1600973848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4f8aff1d844_65550980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2793966175fd4f8aff1a202_41549803', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_2793966175fd4f8aff1a202_41549803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_2793966175fd4f8aff1a202_41549803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
