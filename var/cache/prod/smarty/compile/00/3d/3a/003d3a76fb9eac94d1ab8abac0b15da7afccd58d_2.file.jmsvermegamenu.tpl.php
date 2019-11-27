<?php
/* Smarty version 3.1.33, created on 2019-11-27 05:27:30
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsvermegamenu\views\templates\hook\jmsvermegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde4f92a283c0_96157416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003d3a76fb9eac94d1ab8abac0b15da7afccd58d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsvermegamenu\\views\\templates\\hook\\jmsvermegamenu.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde4f92a283c0_96157416 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['vermenu_html']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	var jmvmm_event = '<?php echo $_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value;?>
';
	var jmvmm_duration = <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
;	
<?php echo '</script'; ?>
>
<style type="text/css">
.jms-vermegamenu .dropdown-menu {    
	transition:all <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
ms;
}
</style><?php }
}
