<?php
/* Smarty version 3.1.33, created on 2020-01-02 05:00:14
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dbf2e984df8_56468059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84e4b3d13547a3687ef2244a98c230d1c0e636da' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\checkout\\checkout.tpl',
      1 => 1575881794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e0dbf2e984df8_56468059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7075995025e0dbf2e95dcf6_92569983', 'head');
?>

    </head>

    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value) && $_smarty_tpl->tpl_vars['jpb_homeclass']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
            <div class="menu-wrap">
                <nav id="off-canvas-menu">
                    <div id="off-canvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MENU'),$_smarty_tpl ) );?>
</div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

                </nav>				
                    <button id="close-button" class="close-button">Close Menu</button>
            </div>
        <?php }?>
        <div class="main-site">
            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13149315605e0dbf2e95dcf0_37960298', 'header');
?>

            </header>
        
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15726608995e0dbf2e984df6_49640839', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13841449515e0dbf2e984df9_47530741', 'breadcrumb');
?>

            <section id="wrapper">
                <div class="container">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14073818895e0dbf2e984df4_90254824', 'content');
?>

                </div>
            </section>

            <footer id="footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17024447955e0dbf2e984df2_31154176', 'footer');
?>

            </footer>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20497304605e0dbf2e984df0_69367084', 'javascript_bottom');
?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

        </div>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_7075995025e0dbf2e95dcf6_92569983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7075995025e0dbf2e95dcf6_92569983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_13149315605e0dbf2e95dcf0_37960298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13149315605e0dbf2e95dcf0_37960298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_15726608995e0dbf2e984df6_49640839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_15726608995e0dbf2e984df6_49640839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_13841449515e0dbf2e984df9_47530741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13841449515e0dbf2e984df9_47530741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'content'} */
class Block_14073818895e0dbf2e984df4_90254824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14073818895e0dbf2e984df4_90254824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <section id="content">
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 left">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 right">
                                    <div class="right-box">
                                        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_17024447955e0dbf2e984df2_31154176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17024447955e0dbf2e984df2_31154176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_20497304605e0dbf2e984df0_69367084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_20497304605e0dbf2e984df0_69367084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
            <?php
}
}
/* {/block 'javascript_bottom'} */
}
