<?php
/* Smarty version 3.1.33, created on 2019-12-05 02:31:40
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsproducttab\views\templates\hook\jmsproducttab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de8b25c6b1a38_21767292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc58ad7b3c5cdc99282d788ef13ca3a23f3efe8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsproducttab\\views\\templates\\hook\\jmsproducttab.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de8b25c6b1a38_21767292 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Tab','mod'=>'jmsproducttab'),$_smarty_tpl ) );?>
</h3>
<div class="form-group">				
	<label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Title','mod'=>'jmsproducttab'),$_smarty_tpl ) );?>
</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>			
				<input id="tabtitle_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="tabtitle[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['tabcontent']->value->tab_title[$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			</div>													
			<?php }?>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>		
</div>
<div class="form-group">				
	<label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Content','mod'=>'jmsproducttab'),$_smarty_tpl ) );?>
</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>
				<textarea id="tabcontent_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" name="tabcontent[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" class="autoload_rte form-control"><?php echo $_smarty_tpl->tpl_vars['tabcontent']->value->html_content[$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
</textarea>				
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			</div>													
			<?php }?>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>		
</div><?php }
}
