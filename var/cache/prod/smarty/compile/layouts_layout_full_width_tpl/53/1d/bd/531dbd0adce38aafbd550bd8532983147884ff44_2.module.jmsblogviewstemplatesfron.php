<?php
/* Smarty version 3.1.33, created on 2019-12-30 21:09:06
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0aadc24deec8_57727664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531dbd0adce38aafbd550bd8532983147884ff44' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1576812507,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0aadc24deec8_57727664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14856487535e0aadc2465d25_69080761', "page_content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_14856487535e0aadc2465d25_69080761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_14856487535e0aadc2465d25_69080761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_yanka\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div class="single-blog">
	<div class="blog-post">
		<h1 class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
		<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>	
		<ul class="post-meta">
			<li class="created">
				<span>
					<span><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
				</span>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 
					<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php }?>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-video">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
			<div class="post-thumb">
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Blog','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
" />
			</div>
		<?php }?>
		<div class="post-fulltext">
			<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>
	
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_SOCIAL_SHARING']) {?>
	<div class="social-sharing">
		
			<?php echo '<script'; ?>
 type="text/javascript">var switchTo5x=true;<?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript" src="http://w.sharethis.com/button/buttons.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});<?php echo '</script'; ?>
>
		
		<span class='st_sharethis_large' displayText='ShareThis'></span>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_FACEBOOK']) {?>
			<span class='st_facebook_large' displayText='Facebook'></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_TWITTER']) {?>
			<span class='st_twitter_large' displayText='Tweet'></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_GOOGLEPLUS']) {?>
			<span class='st_googleplus_large' displayText='Google +'></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_LINKEDIN']) {?>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_PINTEREST']) {?>
			<span class='st_pinterest_large' displayText='Pinterest'></span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_EMAIL']) {?>
			<span class='st_email_large' displayText='Email'></span>
		<?php }?>
	</div>
<?php }?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_COMMENT_ENABLE']) {?>	
		<div id="comments">
			<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_FACEBOOK_COMMENT'] == 0) {?>	
				<?php if ($_smarty_tpl->tpl_vars['msg']->value == 1) {?>
					<div class="success">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment submited','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 ! 
						<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_AUTO_APPROVE_COMMENT'] == 0) {?> 
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please waiting approve from Admin','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
.
						<?php }?>
					</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['cerrors']->value) > 0) {?>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cerrors']->value, 'cerror');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->value) {
?>
							<li class="error"><?php echo $_smarty_tpl->tpl_vars['cerror']->value;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
					<div id="accordion" class="panel-group">
						<div id="post-comments">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
								<div class="post-comment clearfix">
									<div class="post-comment-info">
										<div class="user-image">
											<svg fill="none" viewBox="0 0 24 24" id="icon_avatar" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path fill="transparent" d="M0 0h24v24H0z"></path><path d="M2.826 23.2c.36-5.393 4.323-9.4 9.174-9.4 4.851 0 8.815 4.007 9.174 9.4H2.826z" stroke="currentColor" stroke-width="1.6"></path><circle cx="12" cy="6" r="5.2" stroke="currentColor" stroke-width="1.6"></circle></svg>
										</div>
										<div class="left">
											<div class="title">
												<div>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

													<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
												</div>
												<div>
													<?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['time_add'],'html','UTF-8' )),'%B %e, %Y'), ENT_QUOTES, 'UTF-8');?>

												</div>
											</div>
											<p class="post-comment-content"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['comment'],200,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
										</div>
									</div>
								</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] || (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && $_smarty_tpl->tpl_vars['logged']->value)) {?>
				<div class="commentForm">
					<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&action=submitComment">
						<h4 class="heading">Leave a Comment</h4>
						<div class="form-group">
							<label for="comment_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
							<input id="customer_name" placeholder="Enter your name" class="form-control" name="customer_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" required />
						</div>
						<div class="form-group">
							<label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
							<input id="comment_title" placeholder="john.smith@example.com" class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
" required />
						</div>
						<div class="form-group">
							<label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Website','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
							<input id="customer_site" placeholder="Your website" class="form-control" name="customer_site" type="text" value=""/>
						</div>
						<div class="form-group">
							<label for="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
							<textarea id="comment" placeholder="Write your comments here" class="form-control" name="comment" rows="5" required></textarea>
						</div>
						<div id="new_comment_form_footer">
							<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
							<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
							<div class="form-group">
								<p>
									<img id="capcha">
									<span class="btn-change btn-default active" onclick="recapcha()">
										<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 9h-7v-7h1v5.2c1.853-4.237 6.083-7.2 11-7.2 6.623 0 12 5.377 12 12s-5.377 12-12 12c-6.286 0-11.45-4.844-11.959-11h1.004c.506 5.603 5.221 10 10.955 10 6.071 0 11-4.929 11-11s-4.929-11-11-11c-4.66 0-8.647 2.904-10.249 7h5.249v1z"/></svg>
									</span>
								</p>
								<label for="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Captcha','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</label>
								<input type="text" class="form-control" name="capcha" required>
							</div>
							<button id="submitComment" class="btn-default active" name="submitComment" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Post Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</button>
						</div>
					</form>
					<?php echo '<script'; ?>
>
						
							function recapcha() {
								document.getElementById('capcha').src = `${prestashop.urls.base_url}modules/jmsblog/ajax_jmsblog.php?action=capcha&time=${new Date().getTime()}`;
							}
							recapcha();
						//
						$("#commentForm").validate({
							rules: {
								customer_name: "required",
								email: {
								required: true,
								email: true
								},
								capcha: {
									require: true,
								}
							}
						});
					<?php echo '</script'; ?>
>
				</div>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && !$_smarty_tpl->tpl_vars['logged']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Login to comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<div id="fb-root"></div>
				<?php echo '<script'; ?>
>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.4";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				<?php echo '</script'; ?>
>
				<div class="fb-comments" data-href="<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
" data-width="100%" data-numposts="5"></div>		
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "page_content"} */
}
