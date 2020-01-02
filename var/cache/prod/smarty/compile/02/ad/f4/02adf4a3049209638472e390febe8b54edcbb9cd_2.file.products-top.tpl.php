<?php
/* Smarty version 3.1.33, created on 2020-01-01 23:22:05
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0d6fedc0f1b4_78216040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02adf4a3049209638472e390febe8b54edcbb9cd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1577937429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5e0d6fedc0f1b4_78216040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
			<div class="col-sm-6 col-xs-6 hidden-md-up filter-button">
				<button id="search_filter_toggler">
					<svg>
						<use xlink:href="#icon-filter">
							<symbol id="icon-filter" fill="none" viewBox="0 0 22 24">
								<path d="M9 24V12L1 5V0h22v5l-8 7v8l-6 4zM2.6 4.3l8 7V21l2.8-1.9v-7.9l8-7V1.6H2.6v2.7z" fill="currentColor" stroke-widht="1.6">
								</path>
							</symbol>
						</use>
					</svg>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</button>	
			</div>
		<?php }?>
		<div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 left hidden-sm-down">
			<div class="view-mode">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5520113955e0d6fedc03635_84997271', 'sort_by');
?>

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 view-mode right clearfix">
			<label class="sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View as','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
			<div class="button">
				<a class="view-grid two-column" href="#">
					<span></span>
					<span></span>
				</a>
				<a class="view-grid three-column <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<span></span>
					<span></span>
					<span></span>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<span></span>
					<span></span>
				</a>
			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_5520113955e0d6fedc03635_84997271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_5520113955e0d6fedc03635_84997271',
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
