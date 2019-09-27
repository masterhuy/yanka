<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:15:56
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\addoncontactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc53cb58468_95734831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b17798ba499befdef0a759ab2ebb4e818dbf9ede' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncontactinfo.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc53cb58468_95734831 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact">
	<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title">
		<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
	<?php }?>
	<div class="contact-info<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
		<ul>
	        <?php if ($_smarty_tpl->tpl_vars['ci_address']->value != '') {?>
		       <li class="address">
		       		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 </span>
		       		<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ci_address']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

		   		</li>	
		    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['phone']->value != '') {?>
			   <li class="phone">
			   		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 </span>
			   		<a href="tel:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			   			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			   		</a>
				</li>
			<?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['opentime']->value != '') {?>
			   <li class="open_time">
			   		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Opening: ','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 </span>
			   		<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['opentime']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
			   <li class="email">
			   		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 </span>
			   		<a href="mailto:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			   			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			  		</a>
				</li>
			<?php }?>
	    </ul>
	</div>
</div>
<?php }
}
