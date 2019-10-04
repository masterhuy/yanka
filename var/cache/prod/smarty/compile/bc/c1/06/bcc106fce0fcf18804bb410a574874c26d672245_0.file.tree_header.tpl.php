<?php
/* Smarty version 3.1.33, created on 2019-10-04 03:11:46
  from 'D:\xamppp\htdocs\jms_yanka\admin35718dncn\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96f0b2055069_23145541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc106fce0fcf18804bb410a574874c26d672245' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\admin35718dncn\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96f0b2055069_23145541 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
