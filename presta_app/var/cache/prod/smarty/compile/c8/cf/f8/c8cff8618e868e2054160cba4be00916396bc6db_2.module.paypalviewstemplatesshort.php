<?php
/* Smarty version 3.1.33, created on 2020-12-12 14:05:39
  from 'module:paypalviewstemplatesshort' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd4c02312bac7_68112153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cff8618e868e2054160cba4be00916396bc6db' => 
    array (
      0 => 'module:paypalviewstemplatesshort',
      1 => 1607590616,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4c02312bac7_68112153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start shortcut. Module Paypal -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2098084765fd4c023115009_44206906', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947183025fd4c02311b896_40547201', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18627434335fd4c02311d0f6_12718545', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11931026845fd4c0231291b7_14504492', 'init-button');
?>

<!-- End shortcut. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_2098084765fd4c023115009_44206906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2098084765fd4c023115009_44206906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSvars']->value, 'varValue', false, 'varName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['varName']->value => $_smarty_tpl->tpl_vars['varValue']->value) {
?>
        var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['varName']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['varValue']->value ));?>
;
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_1947183025fd4c02311b896_40547201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1947183025fd4c02311b896_40547201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_18627434335fd4c02311d0f6_12718545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_18627434335fd4c02311d0f6_12718545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['JSscripts']->value) && is_array($_smarty_tpl->tpl_vars['JSscripts']->value) && false === empty($_smarty_tpl->tpl_vars['JSscripts']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscripts']->value, 'JSscript', false, 'keyScript');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyScript']->value => $_smarty_tpl->tpl_vars['JSscript']->value) {
?>
          <?php echo '<script'; ?>
>
            var script = document.querySelector('script[data-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
"]');

            if (null == script) {
                var newScript = document.createElement('script');
                newScript.setAttribute('src', '<?php echo $_smarty_tpl->tpl_vars['JSscript']->value;?>
');
                newScript.setAttribute('data-key', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
');
                document.body.appendChild(newScript);
            }
          <?php echo '</script'; ?>
>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_11931026845fd4c0231291b7_14504492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_11931026845fd4c0231291b7_14504492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalIsLoaded() {
          if (typeof paypal === 'undefined' || typeof Shortcut === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }

          Shortcut.init();
          Shortcut.initButton();
      }

      waitPaypalIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
