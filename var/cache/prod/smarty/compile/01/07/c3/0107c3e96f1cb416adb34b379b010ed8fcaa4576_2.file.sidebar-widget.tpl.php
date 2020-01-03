<?php
/* Smarty version 3.1.33, created on 2020-01-03 04:50:59
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsblogwidget\views\templates\hook\sidebar-widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0f0e831b7626_56410565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0107c3e96f1cb416adb34b379b010ed8fcaa4576' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsblogwidget\\views\\templates\\hook\\sidebar-widget.tpl',
      1 => 1572418915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0f0e831b7626_56410565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_yanka\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_CATEGORYMENU']) {?>
	<aside class="blog-widget widget-categories">
		<h3 class="widget-title">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span>
		</h3>
		<ul>
			<?php echo $_smarty_tpl->tpl_vars['category_menu']->value;?>

		</ul>
	</aside>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
	<div class="tab-pane active" id="popularpost">				
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popularpost']->value, 'post', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['post']->value) {
?>	
			<?php $_smarty_tpl->_assignInScope('show_view', $_smarty_tpl->tpl_vars['post']->value['views']+1);?>	
			<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
			<article class="item-post clearfix">
					<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
						<?php } else { ?>	
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
						<?php }?>
						<p class="post-created"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'htmlall','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
						<h6><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h6>
					</a>
			</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
	<aside class="blog-widget widget-recent-post">
		<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Posts','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>				
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestpost']->value, 'post', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('show_view', $_smarty_tpl->tpl_vars['post']->value['views']+1);?>
			<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
			<article class="item-post clearfix">
				<div class="post-thumb hidden">
					<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
						<?php } else { ?>	
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
						<?php }?>
					</a>
				</div>
				<div class="left">
					<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-title">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],45,'...' ));?>

					</a>
					<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>
					<ul class="post-meta">
						<li class="created">
							<span>
								<span><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
							</span>
						</li>
						<li>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 
							<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					</ul>
				</div>
			</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
	</aside>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
	<aside class="blog-widget widget-lastest-comment">
		<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Comments','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestcomment']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
			<article class="comment-item">
				<p><span><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
:</span> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['comment'],40,'...' ));?>
</p>
			</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
	</aside>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_ARCHIVES']) {?>
	<aside class="blog-widget widget-archives">
		<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Archives','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('aparams', array('archive'=>$_smarty_tpl->tpl_vars['archive']->value['postmonth']));?>
				<li>
					<a class="archive" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-archive',$_smarty_tpl->tpl_vars['aparams']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['archive']->value['postmonth'];?>
</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</aside>
<?php }
}
}
