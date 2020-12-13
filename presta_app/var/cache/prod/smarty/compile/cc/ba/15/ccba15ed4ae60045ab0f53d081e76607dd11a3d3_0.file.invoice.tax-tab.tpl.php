<?php
/* Smarty version 3.1.33, created on 2020-12-13 14:08:53
  from '/var/www/html/pdf/invoice.tax-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd61265674f65_42283882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccba15ed4ae60045ab0f53d081e76607dd11a3d3' => 
    array (
      0 => '/var/www/html/pdf/invoice.tax-tab.tpl',
      1 => 1600973848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd61265674f65_42283882 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--  TAX DETAILS -->
<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value) {?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exempt of VAT according to section 259B of the General Tax Code.','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>


<?php } elseif ((isset($_smarty_tpl->tpl_vars['tax_breakdowns']->value) && $_smarty_tpl->tpl_vars['tax_breakdowns']->value)) {?>
	<table id="tax-tab" width="100%">
		<thead>
			<tr>
				<th class="header small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Detail','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
				<th class="header small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Rate','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>
					<th class="header small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Base price','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
				<?php }?>
				<th class="header-right small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php $_smarty_tpl->_assignInScope('has_line', false);?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tax_breakdowns']->value, 'bd', false, 'label');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['bd']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('label_printed', false);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bd']->value, 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['line']->value['rate'] == 0) {?>
					<?php continue 1;?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('has_line', true);?>
				<tr>
					<td class="white">
						<?php if (!$_smarty_tpl->tpl_vars['label_printed']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['label']->value == 'product_tax') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value == 'shipping_tax') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value == 'ecotax_tax') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ecotax','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value == 'wrapping_tax') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

							<?php }?>
							<?php $_smarty_tpl->_assignInScope('label_printed', true);?>
						<?php }?>
					</td>

					<td class="center white">
						<?php echo $_smarty_tpl->tpl_vars['line']->value['rate'];?>
 %
					</td>

					<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>
						<td class="right white">
							<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value) && $_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['line']->value['total_tax_excl']),$_smarty_tpl ) );?>

						</td>
					<?php }?>

					<td class="right white">
						<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value) && $_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['line']->value['total_amount']),$_smarty_tpl ) );?>

					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php if (!$_smarty_tpl->tpl_vars['has_line']->value) {?>
		<tr>
			<td class="white center" colspan="<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>4<?php } else { ?>3<?php }?>">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No taxes','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

			</td>
		</tr>
		<?php }?>

		</tbody>
	</table>

<?php }?>
<!--  / TAX DETAILS -->
<?php }
}
