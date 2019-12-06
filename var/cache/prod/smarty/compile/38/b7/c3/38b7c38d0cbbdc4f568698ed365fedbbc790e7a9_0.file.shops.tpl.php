<?php
/* Smarty version 3.1.33, created on 2019-12-05 22:15:54
  from 'D:\xamppp\htdocs\jms_yanka\modules\ps_facetedsearch\views\templates\admin\_partials\shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9c7ea786d99_05621500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38b7c38d0cbbdc4f568698ed365fedbbc790e7a9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\shops.tpl',
      1 => 1561998713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9c7ea786d99_05621500 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
