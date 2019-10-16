<?php
/* Smarty version 3.1.33, created on 2019-10-15 23:10:21
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsblog\views\templates\admin\jmsblog_post\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da68a1d578c64_93414721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9d0658aa2c67e979dec00f5884aa3e13219c60' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_post\\pagination.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da68a1d578c64_93414721 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['total']->value > $_smarty_tpl->tpl_vars['limit']->value) {?>
	<div class="pagination">
		<ul>
		<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value == $_smarty_tpl->tpl_vars['start']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost');?>
&configure=jmsblog&start=<?php echo ($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value;?>
&limit=<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		<?php }
}
?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 items</span>
	</div>
</div><?php }
}
