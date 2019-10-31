<?php
/* Smarty version 3.1.33, created on 2019-10-30 23:51:40
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmspagebuilder\views\templates\admin\form\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dba5a4c5ed945_32232984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3822104e26b3f560475d46c411932be3aa794575' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\admin\\form\\helpers\\form\\form.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dba5a4c5ed945_32232984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6161987255dba5a4c5c6842_71633884', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_6161987255dba5a4c5c6842_71633884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_6161987255dba5a4c5c6842_71633884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'skin') {?>
	<div class="col-lg-9">
		<a class="skin-box <?php if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == 'default' || $_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == '') {?>active<?php }?>" title="Default">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));?>
default.png" alt="Default" />
		</a>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['skins'], 'sk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sk']->value) {
?>
			<a class="skin-box <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == $_prefixVariable1) {?>active<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" data-color="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" />
			</a>					
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<input type="hidden" name="JPB_SKIN" id="jmsskin" value="" />
		<?php echo '<script'; ?>
 type="text/javascript">
		jQuery(function ($) {
			"use strict";
			$(".skin-box").click(function() {		
				var skin =  $(this).attr('data-color');		
				$('#jmsskin').val(skin);
				$(".skin-box").removeClass('active');
				$(this).addClass('active');
			});		
		});
		<?php echo '</script'; ?>
>
	</div>	
	<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
