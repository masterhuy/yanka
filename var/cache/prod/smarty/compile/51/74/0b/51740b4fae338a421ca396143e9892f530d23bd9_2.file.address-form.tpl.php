<?php
/* Smarty version 3.1.33, created on 2019-12-20 03:50:57
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\checkout\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfc8b7141ddd3_29753916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51740b4fae338a421ca396143e9892f530d23bd9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\checkout\\_partials\\address-form.tpl',
      1 => 1575883805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfc8b7141ddd3_29753916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17376052925dfc8b7140a546_79429039', 'form_field');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15667835025dfc8b71412256_72762633', 'form_fields');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21281171515dfc8b714160d5_02362189', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
class Block_17376052925dfc8b7140a546_79429039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_17376052925dfc8b7140a546_79429039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias") {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_15667835025dfc8b71412256_72762633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_15667835025dfc8b71412256_72762633',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row">
      <div class="col-md-9">
        <input name = "use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_21281171515dfc8b714160d5_02362189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_21281171515dfc8b714160d5_02362189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn-default pull-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address pull-xs-right btn-default" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="btn-default pull-xs-right" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address pull-xs-right btn-default" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}
