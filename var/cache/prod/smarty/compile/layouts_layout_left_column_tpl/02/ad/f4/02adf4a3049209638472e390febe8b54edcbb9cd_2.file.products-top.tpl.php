<?php
/* Smarty version 3.1.33, created on 2019-10-22 22:55:57
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dafc13d5f8739_74114372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02adf4a3049209638472e390febe8b54edcbb9cd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5dafc13d5f8739_74114372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 left">
			<div class="view-mode ">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19760104825dafc13d5d1630_38796925', 'sort_by');
?>

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode right clearfix">
			<label class="sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View as','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
			<div class="button">
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<i>
                        <svg aria-hidden="true" focusable="false"
                             role="presentation" class="icon icon-theme-186"
                             viewBox="0 0 24 24">
                            <path d="M2.828 2.567a.608.608 0 0 1 .449-.175h16.875c.183 0 .332.059.449.176s.176.268.176.449v16.875c0 .183-.059.332-.176.449s-.267.176-.449.176H3.277c-.183 0-.332-.059-.449-.176s-.176-.267-.176-.449V3.017c0-.182.059-.332.176-.45zm1.074 1.075v4.375h4.375V3.642H3.902zm4.375 5.625H3.902v4.375h4.375V9.267zm-4.375 10h4.375v-4.375H3.902v4.375zm10-11.25V3.642H9.527v4.375h4.375zm-4.375 1.25v4.375h4.375V9.267H9.527zm0 5.625v4.375h4.375v-4.375H9.527zm10-11.25h-4.375v4.375h4.375V3.642zm0 5.625h-4.375v4.375h4.375V9.267zm0 10v-4.375h-4.375v4.375h4.375z"/>
                        </svg>
                    </i>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<i>
                        <svg aria-hidden="true" focusable="false"
                             role="presentation" class="icon icon-theme-187"
                             viewBox="0 0 24 24">
                            <path d="M20.574 2.567a.61.61 0 0 0-.449-.176H3.25c-.183 0-.332.059-.449.176s-.176.268-.176.45v16.875c0 .183.059.332.176.449s.267.176.449.176h16.875c.182 0 .332-.059.449-.176s.176-.267.176-.449V3.017a.613.613 0 0 0-.176-.45zM8.25 19.267H3.875v-4.375H8.25v4.375zm0-5.625H3.875V9.267H8.25v4.375zm0-5.625H3.875V3.642H8.25v4.375zm11.25 11.25h-10v-4.375h10v4.375zm0-5.625h-10V9.267h10v4.375zm0-5.625h-10V3.642h10v4.375z"/>
                        </svg>
                    </i>
				</a>
			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_19760104825dafc13d5d1630_38796925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_19760104825dafc13d5d1630_38796925',
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
}
