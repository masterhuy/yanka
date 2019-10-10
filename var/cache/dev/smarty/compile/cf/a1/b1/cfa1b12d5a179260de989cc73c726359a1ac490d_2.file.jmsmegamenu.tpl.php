<?php
/* Smarty version 3.1.33, created on 2019-10-10 06:22:40
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsmegamenu\views\templates\hook\jmsmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f06708754e8_86671191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa1b12d5a179260de989cc73c726359a1ac490d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsmegamenu\\views\\templates\\hook\\jmsmegamenu.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f06708754e8_86671191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#">
		<i class="d-i-flex">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-191" viewBox="0 0 24 24"><path d="M3.438 5.479h17.375v1.25H3.438zM3.438 11.104h17.375v1.25H3.438zM3.438 16.729h17.375v1.25H3.438z"/>
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
