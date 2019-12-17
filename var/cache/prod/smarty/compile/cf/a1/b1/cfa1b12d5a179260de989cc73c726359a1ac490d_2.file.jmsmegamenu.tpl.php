<?php
/* Smarty version 3.1.33, created on 2019-12-17 05:22:33
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsmegamenu\views\templates\hook\jmsmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8ac69c86920_71770509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa1b12d5a179260de989cc73c726359a1ac490d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsmegamenu\\views\\templates\\hook\\jmsmegamenu.tpl',
      1 => 1574327895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8ac69c86920_71770509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg" href="#">
		<i class="d-i-flex">
			<svg width="24" height="24" viewBox="0 0 24 24">
				<use xlink:href="#icon-mobile-menu-toggle">
					<symbol id="icon-mobile-menu-toggle" fill="none" viewBox="0 0 24 24">
			            <path d="M0 6h24M0 12h16M0 18h24" stroke="currentColor" stroke-widht="1.6"></path>
			        </symbol>
				</use>
			</svg>
		</i>
	</a>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_html']->value,'' ));?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var jmmm_event = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value, ENT_QUOTES, 'UTF-8');?>
';
	var jmmm_duration = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_DURATION']->value, ENT_QUOTES, 'UTF-8');?>
;	
<?php echo '</script'; ?>
>



<?php }
}
