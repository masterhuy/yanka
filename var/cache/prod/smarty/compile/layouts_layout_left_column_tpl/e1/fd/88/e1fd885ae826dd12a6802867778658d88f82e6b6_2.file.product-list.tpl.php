<?php
/* Smarty version 3.1.33, created on 2020-01-01 23:20:34
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0d6f923531c7_88200143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1fd885ae826dd12a6802867778658d88f82e6b6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1577938830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5e0d6f923531c7_88200143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21412221365e0d6f9233bac3_28665763', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_4134820265e0d6f923437c5_05484178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list'} */
class Block_20039400935e0d6f9234b4c3_04378355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_4872172995e0d6f9234f344_88162903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_21412221365e0d6f9233bac3_28665763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21412221365e0d6f9233bac3_28665763',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_4134820265e0d6f923437c5_05484178',
  ),
  'product_list' => 
  array (
    0 => 'Block_20039400935e0d6f9234b4c3_04378355',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_4872172995e0d6f9234f344_88162903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <section id="products">
            <div class="category-title">
                <div class="addon-title">
                    <h3>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['listing']->value['products']), ENT_QUOTES, 'UTF-8');?>
)
                    </h3>
                </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="product-list-top">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4134820265e0d6f923437c5_05484178', 'product_list_top', $this->tplIndex);
?>

                </div>

                <div id="product_list" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide_filters<?php }?> product_list item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?> products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20039400935e0d6f9234b4c3_04378355', 'product_list', $this->tplIndex);
?>

                </div>

                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4872172995e0d6f9234f344_88162903', 'product_list_bottom', $this->tplIndex);
?>

                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </section>
    </section>
<?php
}
}
/* {/block 'content'} */
}
