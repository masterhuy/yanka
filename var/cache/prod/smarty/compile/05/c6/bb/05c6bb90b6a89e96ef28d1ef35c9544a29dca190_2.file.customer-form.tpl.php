<?php
/* Smarty version 3.1.33, created on 2019-12-10 00:02:40
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5def26f0c20654_32475604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c6bb90b6a89e96ef28d1ef35c9544a29dca190' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1575953022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5def26f0c20654_32475604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
    <section>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9903201185def26f0bf9552_57996575', "form_fields");
?>

    </section>

    <footer class="form-footer clearfix">
        <input type="hidden" name="submitCreate" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3236336445def26f0bf9556_07545352', "form_buttons");
?>

        <a class="return-to-store" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or Return to Store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    </footer>
</form>
<?php }
/* {block "form_field"} */
class Block_20930883275def26f0bf9554_80797303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_9903201185def26f0bf9552_57996575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_9903201185def26f0bf9552_57996575',
  ),
  'form_field' => 
  array (
    0 => 'Block_20930883275def26f0bf9554_80797303',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20930883275def26f0bf9554_80797303', "form_field", $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_3236336445def26f0bf9556_07545352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_3236336445def26f0bf9556_07545352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <button class="btn-default w-100" data-link-action="save-customer" type="submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
        <?php
}
}
/* {/block "form_buttons"} */
}
