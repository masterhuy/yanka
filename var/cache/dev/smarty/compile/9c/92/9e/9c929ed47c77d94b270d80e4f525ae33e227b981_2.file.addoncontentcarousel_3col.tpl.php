<?php
/* Smarty version 3.1.33, created on 2019-10-01 03:41:37
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\addoncontentcarousel_3col.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9303312e8322_88133977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c929ed47c77d94b270d80e4f525ae33e227b981' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncontentcarousel_3col.tpl',
      1 => 1569915473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9303312e8322_88133977 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var ct3_items = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
	var ct3_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
	var ct3_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>;
	var ct3_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>;
	var ct3_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
	var ct3_nav = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
	var ct3_pag = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
	var ct3_auto_play_carousel = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div class="content-carousel-3col<?php if (isset($_smarty_tpl->tpl_vars['box_class']->value) && $_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['content']->value['image'] || $_smarty_tpl->tpl_vars['content']->value['content']) {?>
		<div class="content-item">	
			<?php if (isset($_smarty_tpl->tpl_vars['content']->value['image']) && $_smarty_tpl->tpl_vars['content']->value['image']) {?><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="Joommasters.com" /><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['content']->value['content']) && $_smarty_tpl->tpl_vars['content']->value['content']) {
echo $_smarty_tpl->tpl_vars['content']->value['content'];
}?>		
		</div>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
