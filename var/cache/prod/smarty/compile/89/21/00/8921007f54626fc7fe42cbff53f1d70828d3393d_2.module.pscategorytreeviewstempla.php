<?php
/* Smarty version 3.1.33, created on 2020-01-02 03:36:24
  from 'module:pscategorytreeviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dab882722e4_01599049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:pscategorytreeviewstempla',
      1 => 1576744074,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5e0dab882722e4_01599049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'D:\\xamppp\\htdocs\\jms_yanka\\var\\cache\\prod\\smarty\\compile\\89\\21\\00\\8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.pscategorytreeviewstempla.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_17537476605e0dab8824f058_15343939',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="sort-order">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15135575055e0dab8824f058_44422772', 'sort_by');
?>

</div>


<div class="block-categories">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		<div class="title-block">
			<h3 class="d-flex cursor-pointer" data-toggle="collapse" data-target="#category-sub-menu">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collections','d'=>'Shop.Theme.CategoryTree'),$_smarty_tpl ) );?>

                <i class="d-i-flex">
                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                    </svg>
                </i>
            </h3>
		</div>
	<?php }?>
	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>

</div>
<?php }
/* {block 'sort_by'} */
class Block_15135575055e0dab8824f058_44422772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_15135575055e0dab8824f058_44422772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
    <?php
}
}
/* {/block 'sort_by'} */
/* smarty_template_function_categories_17537476605e0dab8824f058_15343939 */
if (!function_exists('smarty_template_function_categories_17537476605e0dab8824f058_15343939')) {
function smarty_template_function_categories_17537476605e0dab8824f058_15343939(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu collapse in" id="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" class="cat-item"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="navbar-toggler collapse-icons collapsed" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="d-i-flex"><svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path></svg></i></span><?php }
if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="sub-list collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="navbar-toggler collapse-icons collapsed" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="d-i-flex"><svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path></svg></i></span><?php }
if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="sub-list collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_17537476605e0dab8824f058_15343939 */
}
