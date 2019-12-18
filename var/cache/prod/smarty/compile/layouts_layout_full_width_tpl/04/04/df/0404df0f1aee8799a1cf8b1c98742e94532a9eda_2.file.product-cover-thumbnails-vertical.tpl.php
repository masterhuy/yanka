<?php
/* Smarty version 3.1.33, created on 2019-12-17 21:57:19
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\_partials\product-cover-thumbnails-vertical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df9958f9ca676_02247330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0404df0f1aee8799a1cf8b1c98742e94532a9eda' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\_partials\\product-cover-thumbnails-vertical.tpl',
      1 => 1573701896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df9958f9ca676_02247330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270600825df9958f9c2972_01101451', 'product_images');
?>

</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

<?php }
/* {block 'product_images'} */
class Block_1270600825df9958f9c2972_01101451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1270600825df9958f9c2972_01101451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="js-qv-mask mask">
            <ul id="gal1" class="product-images js-qv-product-images">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <div class="product-cover">
                        <img class="zoom_01 js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                <div class="layer hidden-xs" data-toggle="modal" data-target="#product-modal">
                    <i class="d-i-flex">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                            <g>
                                <polygon fill="currentColor" points="11.8,7 10.2,7 10.2,10.2 7,10.2 7,11.8 10.2,11.8 10.2,15 11.8,15 11.8,11.8 15,11.8 15,10.2
                                    11.8,10.2">
                                </polygon>
                                <path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
                                    l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z">
                                </path>
                            </g>
                        </svg>
                    </i>
                </div>
            </ul>
        </div>
    <?php
}
}
/* {/block 'product_images'} */
}
