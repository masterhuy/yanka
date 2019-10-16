<?php
/* Smarty version 3.1.33, created on 2019-10-15 23:10:21
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsblog\views\templates\admin\jmsblog_post\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da68a1d522d55_27372720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17e69e5ebc705480fb77c2b682ab37b624601e3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_post\\filter.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da68a1d522d55_27372720 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$( document ).ready(function() {
	$( "#filter_category_id" ).change(function() {
		filterchange();
	});
	$( "#filter_state" ).change(function() {
		filterchange();
	});
});
function filterchange(){
	var category_id = $( "#filter_category_id" ).val();
	var state = $( "#filter_state" ).val();
	var url = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost');?>
&configure=jmsblog&filter_category_id=" + category_id + "&filter_state=" + state;
	url = url.replace('&amp;','&');
	window.location = url;
}
<?php echo '</script'; ?>
>
<div class="jms-blog-filter">
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
	<select id="filter_category_id">
		<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Category','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
		<option <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id'] == $_smarty_tpl->tpl_vars['filter_category_id']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
	
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State Filter','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
	<select id="filter_state">
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value == -1) {?>selected<?php }?> value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Status','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value == 1) {?>selected<?php }?> value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>		
		<option <?php if ($_smarty_tpl->tpl_vars['filter_state']->value == 0) {?>selected<?php }?> value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</option>
	</select>
</div><?php }
}
