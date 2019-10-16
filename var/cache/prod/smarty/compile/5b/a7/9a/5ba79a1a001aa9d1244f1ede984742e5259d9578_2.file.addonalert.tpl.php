<?php
/* Smarty version 3.1.33, created on 2019-10-15 22:50:34
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6857ab2a423_08681488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba79a1a001aa9d1244f1ede984742e5259d9578' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1569815063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da6857ab2a423_08681488 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-alertbox">
	<div id="alert-box" class="collapse in">
		<div  class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?> text-center p-relative">
			<?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
		<a href="#" class="close d-flex flex-center" data-toggle="collapse" data-target="#alert-box">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
				<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
			</svg>
		</a>
	<?php }?>
</div>


<?php }
}
