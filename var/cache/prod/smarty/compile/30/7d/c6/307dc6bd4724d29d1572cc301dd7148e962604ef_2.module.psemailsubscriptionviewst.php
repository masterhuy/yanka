<?php
/* Smarty version 3.1.33, created on 2019-11-27 05:27:31
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde4f9363c7e9_46410535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1574850104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde4f9363c7e9_46410535 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="addon-title">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to Our Newsletter!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
		</div>
		<div class="addon-title popup">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up for Our Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
			<span class="desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to learn about our latest trends and get exclusive offers.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		</div>
		<div class="news_content">
        	<div  class="block_c_right">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>" >
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" required name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" />
						<button type="submit" name="submitNewsletter">
							<span class="pt-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
									<path fill="currentColor" d="M0,4v16h24V4H0z M21,5.6L12,12L3,5.6H21z M1.6,18.4V6.6L12,14l10.4-7.4v11.8H1.6z"></path>
								</svg>
							</span>
						</button>
						<button class="btn-default" type="submit" name="submitNewsletter">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						</button>
						<input type="hidden" name="action" value="0" />
					</div>
					<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			    		<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			        		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			   			</div>
					<?php }?>
				</form>
			</div>
      	</div>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By entering your email, you agree to our Terms of Service and Privacy Policy.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
	</div>
</div>





<?php }
}
