<?php
/* Smarty version 3.1.33, created on 2019-12-05 22:15:54
  from 'D:\xamppp\htdocs\jms_yanka\modules\ps_facetedsearch\views\templates\admin\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9c7ea75fc99_07451142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b1e0fb7d37881a488a31ffc73e2d5aebce24691' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\header.tpl',
      1 => 1561998713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9c7ea75fc99_07451142 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template name:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only as a reminder','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
