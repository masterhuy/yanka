<?php
/* Smarty version 3.1.33, created on 2019-10-29 03:16:25
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\addonproducttab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7e74932a236_27098139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd273c0af394c58930c4eabf5637f930d4d3d1842' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\addonproducttab.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 5,
  ),
),false)) {
function content_5db7e74932a236_27098139 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var tab_items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
var tab_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;
var tab_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>;
var tab_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>;
var tab_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
var p_nav_tab = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
var p_pag_tab = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
var auto_play_tab = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>

<div class="product_tab">
	<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title">
		<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
	<?php }?>		
	<div class="jms-tab d-flex flex-center">
		<ul class="nav d-flex" role="tablist">
		<?php $_smarty_tpl->_assignInScope('cf', 0);?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['show_featured'] == '1') {?>
				<li class="nav-item"><a class="button active" data-toggle="tab" href="#featured"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></li>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['config']->value['show_new'] == '1') {?>
				<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?> button" data-toggle="tab" href="#latest"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Arrival','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>		
			<?php if ($_smarty_tpl->tpl_vars['config']->value['show_topseller'] == '1') {?>
				<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?> button" data-toggle="tab" href="#topseller"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Seller','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>		
			<?php if ($_smarty_tpl->tpl_vars['config']->value['show_special'] == '1') {?>
				<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?> button" data-toggle="tab" href="#special"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['show_onsale'] == '1') {?>
				<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?> button" data-toggle="tab" href="#onsale"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale Off','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>			
		</ul>
	</div>
	<div class="tab-content">
		<?php $_smarty_tpl->_assignInScope('cf', 0);?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_featured'] == '1') {?>
			<div role="tabpanel" class="tab-pane active fade in" id="featured">
			  	<div class="product_box">
				  	<div class="producttab-carousel">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
							<div class="item">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_new'] == '1') {?>
			 <div role="tabpanel" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active in<?php }?>" id="latest">
			 	<div class="product_box">
					<div class="producttab-carousel">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
							<div class="item">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			 </div>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_topseller'] == '1') {?>
			 <div role="tabpanel" class="tab-pane  fade <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active in<?php }?>" id="topseller">
			 	<div class="product_box">
					<div class="producttab-carousel">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topseller_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
							<div class="item">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			 </div>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_special'] == '1') {?>
			 <div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active in<?php }?>" id="special">
				<div class="product_box">
					<div class="producttab-carousel">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['special_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
							<div class="item">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			 </div>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_onsale'] == '1') {?>
			 <div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active in<?php }?>" id="onsale">
				<div class="product_box">
					<div class="producttab-carousel">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['onsale_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
							<div class="item">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			 </div>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
		<?php }?>
	</div>
</div><?php }
}
