<?php
/* Smarty version 3.1.33, created on 2019-10-25 00:38:09
  from 'D:\xamppp\htdocs\jms_yanka\admin35718dncn\themes\default\template\controllers\attributes\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db27c314ec9d6_29806905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a889c246a22e3758d0213e6ef2eb36c3bc98fcfa' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\admin35718dncn\\themes\\default\\template\\controllers\\attributes\\helpers\\form\\form.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db27c314ec9d6_29806905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5918099205db27c314c58d1_37102474', "input_row");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20100875645db27c314c58d5_47637293', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5888761715db27c314c58d9_38953954', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_5918099205db27c314c58d1_37102474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_5918099205db27c314c58d1_37102474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'texture' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		<div class="colorAttributeProperties"<?php if (!$_smarty_tpl->tpl_vars['colorAttributeProperties']->value) {?> style="display: none;"<?php }?>>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'texture' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeForm",'id_attribute'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
/* {block "field"} */
class Block_20100875645db27c314c58d5_47637293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_20100875645db27c314c58d5_47637293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		<div class="col-lg-9">
			<?php if (isset($_smarty_tpl->tpl_vars['imageTextureExists']->value) && $_smarty_tpl->tpl_vars['imageTextureExists']->value) {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['imageTexture']->value;?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Texture','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
" class="img-thumbnail" />
			<?php } else { ?>
				<p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</p>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['imageTextureUrl']->value) && $_smarty_tpl->tpl_vars['imageTextureUrl']->value && isset($_smarty_tpl->tpl_vars['imageTextureExists']->value) && $_smarty_tpl->tpl_vars['imageTextureExists']->value) {?>
			<p>
				<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['imageTextureUrl']->value;?>
">
					<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

				</a>
			</p>
			<?php }?>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
/* {block "script"} */
class Block_5888761715db27c314c58d9_38953954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5888761715db27c314c58d9_38953954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var attributesGroups = {<?php echo $_smarty_tpl->tpl_vars['strAttributesGroups']->value;?>
};

	var displayColorFieldsOption = function() {
		var val = $('#id_attribute_group').val();
		if (attributesGroups[val])
			$('.colorAttributeProperties').show();
		else
			$('.colorAttributeProperties').hide();
	};

	displayColorFieldsOption();

	$('#id_attribute_group').change(displayColorFieldsOption);

	var shop_associations = <?php echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['shop_associations'];?>
;
	var changeAssociationGroup = function()
	{
		var id_attribute_group = $('#id_attribute_group').val();
		$('.input_shop').each(function(k, item)
		{
			var id_shop = $(item).attr('shop_id');
			if (typeof shop_associations[id_attribute_group] != 'undefined' && $.inArray(id_shop, shop_associations[id_attribute_group]) > -1)
				$(item).attr('disabled', false);
			else
			{
				$(item).attr('disabled', true);
				$(item).attr('checked', false);
			}
		});
	};
	$('#id_attribute_group').change(changeAssociationGroup);
	changeAssociationGroup();
<?php
}
}
/* {/block "script"} */
}
