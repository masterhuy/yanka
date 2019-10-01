<?php
/* Smarty version 3.1.33, created on 2019-10-01 05:36:39
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmswishlist\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d931e27a90ea4_36999278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac254d6f7dc0d8e87a1b21ec773e16ead27301e6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1569834355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d931e27a90ea4_36999278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE WishList -->
<a class="wishlist_top home_page lnk_wishlist p-relative" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
		<path fill="currentColor" d="M6.9,2.6c1.4,0,2.7,0.6,3.8,1.6l0.2,0.2L12,5.6l1.1-1.1l0.2-0.2c1-1,2.3-1.6,3.8-1.6s2.8,0.6,3.8,1.6
		c2.1,2.1,2.1,5.6,0,7.7L12,20.7l-8.9-8.9C1,9.7,1,6.2,3.1,4.1C4.2,3.2,5.5,2.6,6.9,2.6z M6.9,1C5.1,1,3.3,1.7,2,3.1
		c-2.7,2.7-2.7,7.2,0,9.9l10,10l10-9.9c2.7-2.8,2.7-7.3,0-10c-1.4-1.4-3.1-2-4.9-2c-1.8,0-3.6,0.7-4.9,2L12,3.3l-0.2-0.2
		C10.4,1.7,8.7,1,6.9,1z">
		</path>
	</svg>
    <span class="tooltip-wrap bottom">
       	<span class="tooltip-text">
      	 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

   		</span>
   </span>
</a>
<a class=" wishlist_top my_account lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

	</span>
</a>
<!-- END : MODULE WishList --><?php }
}
