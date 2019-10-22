<?php
/* Smarty version 3.1.33, created on 2019-10-22 04:59:14
  from 'D:\xamppp\htdocs\jms_yanka\admin35718dncn\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daec4e2ba6c76_78548831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4abff74122ee035973388377e28394a0e8c8ab00' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\admin35718dncn\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daec4e2ba6c76_78548831 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
