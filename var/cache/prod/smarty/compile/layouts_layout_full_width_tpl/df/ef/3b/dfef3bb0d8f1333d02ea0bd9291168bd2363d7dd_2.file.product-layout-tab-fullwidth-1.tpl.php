<?php
/* Smarty version 3.1.33, created on 2020-01-15 02:39:05
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\product-layout-tab-fullwidth-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1ec19988f494_83030052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfef3bb0d8f1333d02ea0bd9291168bd2363d7dd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\product-layout-tab-fullwidth-1.tpl',
      1 => 1579073413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5e1ec19988f494_83030052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14285184945e1ec1997f3095_44014304', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15277358705e1ec1997f3096_45630847', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18895254825e1ec1997f3097_82644952', 'content');
?>


<div class="tab-fullwidth-1">

</div>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_14285184945e1ec1997f3095_44014304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14285184945e1ec1997f3095_44014304',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_15277358705e1ec1997f3096_45630847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15277358705e1ec1997f3096_45630847',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_tumbnails'} */
class Block_2175924215e1ec19981a198_59418707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_9156880755e1ec19981a196_52399163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2175924215e1ec19981a198_59418707', 'product_cover_tumbnails', $this->tplIndex);
?>

                                <div class="scroll-box-arrows">
                                    <i class="fa fa-angle-left left"></i>
                                    <i class="fa fa-angle-right right"></i>
                                </div>
                            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20172287375e1ec19981a190_50861584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section class="page-content" id="content">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9156880755e1ec19981a196_52399163', 'page_content', $this->tplIndex);
?>

                        </section>
                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_flags'} */
class Block_6555901135e1ec19981a195_35682484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['flags']) {?>
                            <ul class="product-flags">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_16722498825e1ec19981a198_37165815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="product-cover">
                            <img class="zoom_01 js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                        </div>
                    <?php
}
}
/* {/block 'product_cover'} */
/* {block 'page_title'} */
class Block_7173050125e1ec19981a196_31098523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_14437530275e1ec19981a195_30836761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h2 itemprop="name" class="pd-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7173050125e1ec19981a196_31098523', 'page_title', $this->tplIndex);
?>
</h2>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_10398464225e1ec19981a197_48198078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14437530275e1ec19981a195_30836761', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_8902144155e1ec19981a193_88050242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_additional_info'} */
class Block_3953044225e1ec19981a192_26854214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_availability'} */
class Block_20759825395e1ec19981a191_18987076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                                    <li>
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                                        <span class="editable">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                                                <i class="material-icons product-last-items">&#xE002;</i>
                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </span>
                                    </li>
                                <?php }?>
                            <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_description_short'} */
class Block_9148486715e1ec199841295_44575455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],350,"..." ));?>
</div>
                        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_7086935365e1ec199841297_52067802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                            <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_miniature'} */
class Block_8652377205e1ec199841297_94892231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_16234264415e1ec199841290_40483703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                            <section class="product-pack">
                                                <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                                                <article>
                                                    <div class="card">
                                                        <div class="pack-product-container">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Products</th>
                                                                        <th>Price</th>
                                                                        <th>Quantity</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8652377205e1ec199841297_94892231', 'product_miniature', $this->tplIndex);
?>

                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </article>
                                            </section>
                                        <?php }?>
                                    <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_20489615165e1ec199841293_91431708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_variants'} */
class Block_11949085715e1ec199841295_64319699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'hook_display_reassurance'} */
class Block_9663815585e1ec199841291_65542811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                                    <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_add_to_cart'} */
class Block_9948795655e1ec199841294_96346658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_16597731475e1ec199841298_09428704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                    <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_6555040105e1ec199841293_01711806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16234264415e1ec199841290_40483703', 'product_pack', $this->tplIndex);
?>

                                    
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20489615165e1ec199841293_91431708', 'product_discounts', $this->tplIndex);
?>

                                    
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11949085715e1ec199841295_64319699', 'product_variants', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9663815585e1ec199841291_65542811', 'hook_display_reassurance', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9948795655e1ec199841294_96346658', 'product_add_to_cart', $this->tplIndex);
?>


                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16597731475e1ec199841298_09428704', 'product_refresh', $this->tplIndex);
?>

                                </form>
                            <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_5903271045e1ec199868391_67914036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="product-description container"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                            <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_17761962825e1ec199868395_00540915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_8472850915e1ec199868397_19040511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                                <div class="tab-pane fade in" id="attachments" role="tabpanel">
                                    <section class="product-attachments">
                                        <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                            <div class="attachment">
                                                <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                                </a>
                                            </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </section>
                                </div>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_footer'} */
class Block_9314005495e1ec199868398_50260651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                                <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_tabs'} */
class Block_16632739505e1ec199868393_79038955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                            <li class="nav-item">
                                <a
                                    class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                                    data-toggle="tab"
                                    href="#description"
                                    role="tab"
                                    aria-controls="description"
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="tab"
                                href="#product-details"
                                role="tab"
                                aria-controls="product-details"
                            >
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional information','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link reviews"
                                data-toggle="tab"
                                href="#product-reviews"
                                role="tab"
                                aria-controls="product-details"
                            >
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    data-toggle="tab"
                                    href="#attachments"
                                    role="tab"
                                    aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    data-toggle="tab"
                                    href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    role="tab"
                                    aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description" role="tabpanel">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5903271045e1ec199868391_67914036', 'product_description', $this->tplIndex);
?>

                        </div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17761962825e1ec199868395_00540915', 'product_details', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8472850915e1ec199868397_19040511', 'product_attachments', $this->tplIndex);
?>


                        <div class="tab-pane fade" id="product-reviews" role="tabpanel">
                            <div class="container">
                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9314005495e1ec199868398_50260651', 'product_footer', $this->tplIndex);
?>

                            </div>
                        </div>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                            <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                                <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>  
                </div>
            <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_14558863185e1ec19988f494_74789985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_11315909355e1ec199868391_29912786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                <section class="product-accessories clearfix">
                    <div class="addon-title">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                    </div>
                
                    <div class="products accessories-carousel customs-carousel-product">      
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                            <div class="item ajax_block_product">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14558863185e1ec19988f494_74789985', 'product_miniature', $this->tplIndex);
?>
  
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </section>
            <?php }?>
        <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_9123485415e1ec19988f494_77860325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_5724835955e1ec19988f496_72620583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer_container'} */
class Block_19132095195e1ec19988f494_59036126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18895254825e1ec1997f3097_82644952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18895254825e1ec1997f3097_82644952',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20172287375e1ec19981a190_50861584',
  ),
  'page_content' => 
  array (
    0 => 'Block_9156880755e1ec19981a196_52399163',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_2175924215e1ec19981a198_59418707',
  ),
  'product_flags' => 
  array (
    0 => 'Block_6555901135e1ec19981a195_35682484',
  ),
  'product_cover' => 
  array (
    0 => 'Block_16722498825e1ec19981a198_37165815',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10398464225e1ec19981a197_48198078',
  ),
  'page_header' => 
  array (
    0 => 'Block_14437530275e1ec19981a195_30836761',
  ),
  'page_title' => 
  array (
    0 => 'Block_7173050125e1ec19981a196_31098523',
  ),
  'product_prices' => 
  array (
    0 => 'Block_8902144155e1ec19981a193_88050242',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_3953044225e1ec19981a192_26854214',
  ),
  'product_availability' => 
  array (
    0 => 'Block_20759825395e1ec19981a191_18987076',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_9148486715e1ec199841295_44575455',
  ),
  'product_customization' => 
  array (
    0 => 'Block_7086935365e1ec199841297_52067802',
  ),
  'product_buy' => 
  array (
    0 => 'Block_6555040105e1ec199841293_01711806',
  ),
  'product_pack' => 
  array (
    0 => 'Block_16234264415e1ec199841290_40483703',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_8652377205e1ec199841297_94892231',
    1 => 'Block_14558863185e1ec19988f494_74789985',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_20489615165e1ec199841293_91431708',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11949085715e1ec199841295_64319699',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_9663815585e1ec199841291_65542811',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_9948795655e1ec199841294_96346658',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_16597731475e1ec199841298_09428704',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_16632739505e1ec199868393_79038955',
  ),
  'product_description' => 
  array (
    0 => 'Block_5903271045e1ec199868391_67914036',
  ),
  'product_details' => 
  array (
    0 => 'Block_17761962825e1ec199868395_00540915',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_8472850915e1ec199868397_19040511',
  ),
  'product_footer' => 
  array (
    0 => 'Block_9314005495e1ec199868398_50260651',
    1 => 'Block_9123485415e1ec19988f494_77860325',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_11315909355e1ec199868391_29912786',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_5724835955e1ec19988f496_72620583',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19132095195e1ec19988f494_59036126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="row product-detail tab-fullwidth-1">
            <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pd-left-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20172287375e1ec19981a190_50861584', 'page_content_container', $this->tplIndex);
?>

                </div>
            </div>
            <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-flex">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6555901135e1ec19981a195_35682484', 'product_flags', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16722498825e1ec19981a198_37165815', 'product_cover', $this->tplIndex);
?>


                    <div class="block-info">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10398464225e1ec19981a197_48198078', 'page_header_container', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8902144155e1ec19981a193_88050242', 'product_prices', $this->tplIndex);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3953044225e1ec19981a192_26854214', 'product_additional_info', $this->tplIndex);
?>

            
                    <div class="product-information">
                        <ul class="other-info">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                                <li id="product_reference">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Code:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                                    <span class="editable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </li>
                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20759825395e1ec19981a191_18987076', 'product_availability', $this->tplIndex);
?>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) {?>
                                <li id="product_vendor">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vendor:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                                    <span class="editable"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</span>
                                </li>
                            <?php }?>
                            <li class="product-category">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Type: '),$_smarty_tpl ) );?>
</label>
                                <a class="editable" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                </a
                            </li>
                        </ul>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9148486715e1ec199841295_44575455', 'product_description_short', $this->tplIndex);
?>


                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > 0) {?>
                            <div class="specific_prices">
                                <div class="countdown-box">
                                    <div class="countdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'], ENT_QUOTES, 'UTF-8');?>
</div>
                                </div>
                            </div>
                        <?php }?>
                    
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7086935365e1ec199841297_52067802', 'product_customization', $this->tplIndex);
?>

                        <?php }?>
                    
                        <div class="product-actions">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6555040105e1ec199841293_01711806', 'product_buy', $this->tplIndex);
?>

                        </div>
                    </div>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_ld1s"></div>

                    <div class="guaranteed text-center p-relative">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guaranteed safe checkout','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                        <img class="img-responsive mg-auto px-15" src="themes/jms_yanka/assets/img/payments.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="more_info_block" class="tabs">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16632739505e1ec199868393_79038955', 'product_tabs', $this->tplIndex);
?>

        </div>
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11315909355e1ec199868391_29912786', 'product_accessories', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9123485415e1ec19988f494_77860325', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5724835955e1ec19988f496_72620583', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19132095195e1ec19988f494_59036126', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
