<?php
/* Smarty version 3.1.33, created on 2019-11-17 22:45:33
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd213dd1af496_77174820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0fa5ce3ec28f6f285905567ac79f1b365fabefd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\checkout\\_partials\\cart-detailed.tpl',
      1 => 1574048672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_5dd213dd1af496_77174820 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <div class="label-title hidden-xs">
        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
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
        <div class="no-items text-center">
            <svg width="119" height="119" viewBox="0 0 119 119" fill="none">
                <use xlink:href="#icon-empty_shopping_bag">
                    <symbol id="icon-empty_shopping_bag" fill="none" viewBox="0 0 100 119">
                        <path d="M5.86 119h88.28a5.865 5.865 0 0 0 5.86-5.859V21.484a1.953 1.953 0 0 0-1.953-1.953H84.375C84.375 8.761 75.613 0 64.844 0 54.05 0 45.313 8.73 45.313 19.531H30.468a1.953 1.953 0 0 0-1.953 1.953v32.657H1.953A1.953 1.953 0 0 0 0 56.094v57.047A5.865 5.865 0 0 0 5.86 119zm-1.954-5.859V97.109H49.22v16.032a1.955 1.955 0 0 1-1.953 1.953H5.859a1.955 1.955 0 0 1-1.953-1.953zm90.235 1.953H52.789a5.83 5.83 0 0 0 .336-1.953V97.109h42.969v16.032a1.955 1.955 0 0 1-1.953 1.953zM64.844 3.906c8.616 0 15.625 7.01 15.625 15.625h-31.25c0-8.635 6.984-15.625 15.625-15.625zM32.422 23.438h12.89v8.984H43.36a1.953 1.953 0 1 0 0 3.906h7.813a1.953 1.953 0 1 0 0-3.906H49.22v-8.984h31.25v8.984h-1.953a1.953 1.953 0 1 0 0 3.906h7.812a1.953 1.953 0 1 0 0-3.906h-1.953v-8.984h11.719v69.765h-42.97v-37.11a1.953 1.953 0 0 0-1.953-1.952h-18.75V23.438zm16.797 34.609v35.156H3.906V58.047H49.22z" fill="currentColor"></path>
                        <path d="M14.844 69.766v3.906c0 6.474 5.244 11.719 11.719 11.719 6.462 0 11.718-5.257 11.718-11.72v-3.905a1.953 1.953 0 1 0 0-3.907h-3.906a1.953 1.953 0 1 0 0 3.907v3.906c0 4.307-3.505 7.812-7.813 7.812a7.812 7.812 0 0 1-7.812-7.812v-3.906a1.953 1.953 0 1 0 0-3.907h-3.906a1.953 1.953 0 1 0 0 3.907z" fill="currentColor"></path>
                    </symbol>
                </use>
            </svg>
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Bag is Empty','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping bag is empty.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            <a class="btn-border" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
        </div>
    <?php }?>
</div>
<?php }
}
