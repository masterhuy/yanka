<?php
/* Smarty version 3.1.33, created on 2019-11-14 05:05:21
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd26e1c85fd0_47604533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0fa5ce3ec28f6f285905567ac79f1b365fabefd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\checkout\\_partials\\cart-detailed.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_5dcd26e1c85fd0_47604533 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <div class="label-title hidden-xs">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
        <ul class="cart-items">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <li class="cart-item"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
                <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?>
                <hr>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php } else { ?>
        <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
    <?php }?>
</div>
<?php }
}
