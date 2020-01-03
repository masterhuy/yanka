<?php
/* Smarty version 3.1.33, created on 2020-01-02 22:49:52
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0eb9e0c3b217_11699271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac907d3cb88afe25d1519968f35eba8f612289f4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1573790425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5e0eb9e0c3b217_11699271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>


<form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
    <section>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186458525e0eb9e0c33513_87293507', 'form_fields');
?>

    </section>

    <footer class="form-footer text-xs-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12602617375e0eb9e0c37395_58609079', 'form_buttons');
?>


        <div class="forgot-password">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lost your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

            </a>
        </div>	
    </footer>
</form>
<?php }
/* {block 'form_field'} */
class Block_6438558745e0eb9e0c33510_55486254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_1186458525e0eb9e0c33513_87293507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_1186458525e0eb9e0c33513_87293507',
  ),
  'form_field' => 
  array (
    0 => 'Block_6438558745e0eb9e0c33510_55486254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6438558745e0eb9e0c33510_55486254', 'form_field', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_12602617375e0eb9e0c37395_58609079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_12602617375e0eb9e0c37395_58609079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <button class="btn-default w-100" data-link-action="sign-in" type="submit" class="form-control-submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
        <?php
}
}
/* {/block 'form_buttons'} */
}
