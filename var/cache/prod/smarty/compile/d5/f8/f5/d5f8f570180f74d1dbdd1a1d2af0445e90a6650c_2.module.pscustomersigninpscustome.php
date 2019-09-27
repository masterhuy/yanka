<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:15:56
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc53ca1fc60_35388924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1569568109,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc53ca1fc60_35388924 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-1">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
			<a href="#" class="account dropdown-toggle p-relative" data-toggle="dropdown">      
				<svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-201" viewBox="0 0 24 24">
                    <path d="M4.023 22.167h-1.25v-.625c0-1.042.163-2.034.488-2.979a9.524 9.524 0 0 1 1.357-2.588 9.366 9.366 0 0 1 2.061-2.031 9.58 9.58 0 0 1 2.598-1.328 5.588 5.588 0 0 1-1.992-2.002 5.413 5.413 0 0 1-.762-2.822c0-.781.146-1.51.439-2.188A5.707 5.707 0 0 1 9.96 2.606c.677-.293 1.406-.439 2.188-.439s1.51.146 2.188.439a5.724 5.724 0 0 1 2.998 2.998c.293.677.439 1.406.439 2.188 0 1.029-.254 1.97-.762 2.822a5.588 5.588 0 0 1-1.992 2.002 9.623 9.623 0 0 1 2.598 1.328 9.41 9.41 0 0 1 3.418 4.619c.325.944.488 1.937.488 2.979v.625h-1.25v-.625c0-1.12-.212-2.174-.635-3.164A8.172 8.172 0 0 0 17.9 15.79a8.172 8.172 0 0 0-2.588-1.738 7.966 7.966 0 0 0-3.164-.635c-1.12 0-2.175.212-3.164.635a8.15 8.15 0 0 0-2.588 1.738 8.155 8.155 0 0 0-1.738 2.588 7.966 7.966 0 0 0-.635 3.164v.625zM8.115 9.491a4.364 4.364 0 0 0 2.334 2.334 4.28 4.28 0 0 0 1.699.342 4.375 4.375 0 0 0 4.033-2.676 4.28 4.28 0 0 0 .342-1.699 4.28 4.28 0 0 0-.342-1.699 4.392 4.392 0 0 0-.938-1.396 4.4 4.4 0 0 0-1.396-.937 4.284 4.284 0 0 0-1.699-.342c-.599 0-1.166.114-1.699.342-.534.228-1 .541-1.396.937-.397.397-.71.863-.938 1.396a4.28 4.28 0 0 0-.342 1.699c0 .599.114 1.165.342 1.699z"/>
                </svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			   		</span>
		       </span>
		  	</a>
			<div id="login-1" class="collapse dropdown-menu">
				<ul>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php } else { ?>   
			<a href="#" class="account dropdown-toggle p-relative" data-toggle="dropdown">
				<svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-201" viewBox="0 0 24 24">
                    <path d="M4.023 22.167h-1.25v-.625c0-1.042.163-2.034.488-2.979a9.524 9.524 0 0 1 1.357-2.588 9.366 9.366 0 0 1 2.061-2.031 9.58 9.58 0 0 1 2.598-1.328 5.588 5.588 0 0 1-1.992-2.002 5.413 5.413 0 0 1-.762-2.822c0-.781.146-1.51.439-2.188A5.707 5.707 0 0 1 9.96 2.606c.677-.293 1.406-.439 2.188-.439s1.51.146 2.188.439a5.724 5.724 0 0 1 2.998 2.998c.293.677.439 1.406.439 2.188 0 1.029-.254 1.97-.762 2.822a5.588 5.588 0 0 1-1.992 2.002 9.623 9.623 0 0 1 2.598 1.328 9.41 9.41 0 0 1 3.418 4.619c.325.944.488 1.937.488 2.979v.625h-1.25v-.625c0-1.12-.212-2.174-.635-3.164A8.172 8.172 0 0 0 17.9 15.79a8.172 8.172 0 0 0-2.588-1.738 7.966 7.966 0 0 0-3.164-.635c-1.12 0-2.175.212-3.164.635a8.15 8.15 0 0 0-2.588 1.738 8.155 8.155 0 0 0-1.738 2.588 7.966 7.966 0 0 0-.635 3.164v.625zM8.115 9.491a4.364 4.364 0 0 0 2.334 2.334 4.28 4.28 0 0 0 1.699.342 4.375 4.375 0 0 0 4.033-2.676 4.28 4.28 0 0 0 .342-1.699 4.28 4.28 0 0 0-.342-1.699 4.392 4.392 0 0 0-.938-1.396 4.4 4.4 0 0 0-1.396-.937 4.284 4.284 0 0 0-1.699-.342c-.599 0-1.166.114-1.699.342-.534.228-1 .541-1.396.937-.397.397-.71.863-.938 1.396a4.28 4.28 0 0 0-.342 1.699c0 .599.114 1.165.342 1.699z"/>
                </svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			   		</span>
		       </span>
			</a>
			<div id="login" class="collapse dropdown-menu">
				<ul>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>		
					<li><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php }?>
	</div>
</div>

<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-2">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
			<a href="#" class="account dropdown-toggle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="dropdown">      
				<i class="fa fa-user"></i>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

		  	</a>
			<div id="login-2" class="collapse dropdown-menu">
				<ul>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php } else { ?>   
			<a href="#" class="account dropdown-toggle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" data-toggle="dropdown">
				<i class="fa fa-user"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</a>
			<div id="login-2" class="collapse dropdown-menu">
				<ul>		
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" class="account" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 </a></li>
					<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
				</ul>
			</div>
		<?php }?>
	</div>
</div>

<?php }
}
