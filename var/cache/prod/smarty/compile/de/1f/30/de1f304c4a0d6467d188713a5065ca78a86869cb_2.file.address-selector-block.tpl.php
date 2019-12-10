<?php
/* Smarty version 3.1.33, created on 2019-12-09 23:32:10
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\checkout\_partials\address-selector-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5def1fca35fbb5_74316569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1f304c4a0d6467d188713a5065ca78a86869cb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\checkout\\_partials\\address-selector-block.tpl',
      1 => 1575883643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5def1fca35fbb5_74316569 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
  <article
    class="address-item<?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected<?php }?>"
    id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value )), ENT_QUOTES, 'UTF-8');?>
-address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
  >
    <header class="h4">
      <label class="radio-block">
        <span class="custom-radio">
          <input
            type="radio"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?>checked<?php }?>
          >
          <span></span>
        </span>
        <span class="address-alias h4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</span>
        <div class="address"><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</div>
      </label>
    </header>
    <footer class="address-footer">
      <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
        <a
          class="delete-address text-muted btn-default"
          data-link-action="delete-address"
          href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'deleteAddress'=>true,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
        >
          <i class="delete fa fa-trash"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
		<a
          class="edit-address text-muted btn-default"
          data-link-action="edit-address"
          href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'editAddress'=>$_smarty_tpl->tpl_vars['type']->value,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
        >
          <i class="edit fa fa-pencil-square-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
      <?php }?>
    </footer>
  </article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
  <p>
    <button class="ps-hidden-by-js form-control-submit center-block" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </p>
<?php }
}
}
