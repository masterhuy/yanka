<?php
/* Smarty version 3.1.33, created on 2019-12-12 20:45:07
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\product-layout-three-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2ed2339b2c5_76424924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1b73b81199a860692588fa87710b4b79db527f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\product-layout-three-column.tpl',
      1 => 1574668975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-horizontal.tpl' => 1,
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
function content_5df2ed2339b2c5_76424924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8600341605df2ed23289bc4_20698508', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6501842055df2ed23289bc4_63319770', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1935608705df2ed232b0cc5_28072157', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_8600341605df2ed23289bc4_20698508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_8600341605df2ed23289bc4_20698508',
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
class Block_6501842055df2ed23289bc4_63319770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_6501842055df2ed23289bc4_63319770',
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
class Block_10912259945df2ed232b0cc6_98235122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-horizontal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_11029463225df2ed232b0cc7_72742742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10912259945df2ed232b0cc6_98235122', 'product_cover_tumbnails', $this->tplIndex);
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
class Block_11984104695df2ed232b0cc6_11668629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section class="page-content" id="content">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11029463225df2ed232b0cc7_72742742', 'page_content', $this->tplIndex);
?>

                        </section>
                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_flags'} */
class Block_11895192105df2ed232b0cc9_42073763 extends Smarty_Internal_Block
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
/* {block 'page_title'} */
class Block_10940313675df2ed232d7dc0_69374616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_11958932455df2ed232d7dc5_75589978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h2 itemprop="name" class="pd-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10940313675df2ed232d7dc0_69374616', 'page_title', $this->tplIndex);
?>
</h2>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_5148535885df2ed232d7dc6_64187433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11958932455df2ed232d7dc5_75589978', 'page_header', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_738271215df2ed232d7dc9_24157371 extends Smarty_Internal_Block
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
class Block_20571324745df2ed232d7dc9_12403938 extends Smarty_Internal_Block
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
class Block_17345552345df2ed232d7dc1_41404446 extends Smarty_Internal_Block
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
class Block_13789327485df2ed232feec3_90873936 extends Smarty_Internal_Block
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
class Block_46343365df2ed23325fc9_11671090 extends Smarty_Internal_Block
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
class Block_5955522795df2ed23325fc8_15508373 extends Smarty_Internal_Block
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
class Block_14523585755df2ed23325fc4_72081715 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5955522795df2ed23325fc8_15508373', 'product_miniature', $this->tplIndex);
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
class Block_9359454545df2ed2334d0c8_81282660 extends Smarty_Internal_Block
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
class Block_16070192965df2ed2334d0c5_12103158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_11612228405df2ed2334d0c8_13918926 extends Smarty_Internal_Block
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
class Block_7802167865df2ed2334d0c0_08968491 extends Smarty_Internal_Block
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
class Block_4918700995df2ed23325fc8_69575416 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14523585755df2ed23325fc4_72081715', 'product_pack', $this->tplIndex);
?>

                                
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9359454545df2ed2334d0c8_81282660', 'product_discounts', $this->tplIndex);
?>

                                
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16070192965df2ed2334d0c5_12103158', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11612228405df2ed2334d0c8_13918926', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7802167865df2ed2334d0c0_08968491', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_5621246705df2ed2334d0c8_80181981 extends Smarty_Internal_Block
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
class Block_15487561955df2ed2334d0c6_10842695 extends Smarty_Internal_Block
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
class Block_3372848285df2ed233741c7_21233495 extends Smarty_Internal_Block
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
class Block_4976729495df2ed233741c2_31691532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                                <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_tabs'} */
class Block_7336034035df2ed2334d0c4_98234092 extends Smarty_Internal_Block
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
                                class="nav-link"
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5621246705df2ed2334d0c8_80181981', 'product_description', $this->tplIndex);
?>

                        </div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15487561955df2ed2334d0c6_10842695', 'product_details', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3372848285df2ed233741c7_21233495', 'product_attachments', $this->tplIndex);
?>


                        <div class="tab-pane fade" id="product-reviews" role="tabpanel">
                            <div class="container">
                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4976729495df2ed233741c2_31691532', 'product_footer', $this->tplIndex);
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
class Block_2721962675df2ed233741c7_93525311 extends Smarty_Internal_Block
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
class Block_9176683515df2ed233741c2_93625050 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2721962675df2ed233741c7_93525311', 'product_miniature', $this->tplIndex);
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
class Block_15732584615df2ed2339b2c2_85446756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_16250141785df2ed2339b2c8_37761594 extends Smarty_Internal_Block
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
class Block_2101704815df2ed2339b2c9_96879984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1935608705df2ed232b0cc5_28072157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1935608705df2ed232b0cc5_28072157',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11984104695df2ed232b0cc6_11668629',
  ),
  'page_content' => 
  array (
    0 => 'Block_11029463225df2ed232b0cc7_72742742',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_10912259945df2ed232b0cc6_98235122',
  ),
  'product_flags' => 
  array (
    0 => 'Block_11895192105df2ed232b0cc9_42073763',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5148535885df2ed232d7dc6_64187433',
  ),
  'page_header' => 
  array (
    0 => 'Block_11958932455df2ed232d7dc5_75589978',
  ),
  'page_title' => 
  array (
    0 => 'Block_10940313675df2ed232d7dc0_69374616',
  ),
  'product_prices' => 
  array (
    0 => 'Block_738271215df2ed232d7dc9_24157371',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_20571324745df2ed232d7dc9_12403938',
  ),
  'product_availability' => 
  array (
    0 => 'Block_17345552345df2ed232d7dc1_41404446',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_13789327485df2ed232feec3_90873936',
  ),
  'product_customization' => 
  array (
    0 => 'Block_46343365df2ed23325fc9_11671090',
  ),
  'product_buy' => 
  array (
    0 => 'Block_4918700995df2ed23325fc8_69575416',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14523585755df2ed23325fc4_72081715',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_5955522795df2ed23325fc8_15508373',
    1 => 'Block_2721962675df2ed233741c7_93525311',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_9359454545df2ed2334d0c8_81282660',
  ),
  'product_variants' => 
  array (
    0 => 'Block_16070192965df2ed2334d0c5_12103158',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_11612228405df2ed2334d0c8_13918926',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_7802167865df2ed2334d0c0_08968491',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_7336034035df2ed2334d0c4_98234092',
  ),
  'product_description' => 
  array (
    0 => 'Block_5621246705df2ed2334d0c8_80181981',
  ),
  'product_details' => 
  array (
    0 => 'Block_15487561955df2ed2334d0c6_10842695',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_3372848285df2ed233741c7_21233495',
  ),
  'product_footer' => 
  array (
    0 => 'Block_4976729495df2ed233741c2_31691532',
    1 => 'Block_15732584615df2ed2339b2c2_85446756',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_9176683515df2ed233741c2_93625050',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_16250141785df2ed2339b2c8_37761594',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2101704815df2ed2339b2c9_96879984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="row product-detail thumb-horizontal three-column">
            <div class="pb-left-column col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="pd-left-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11984104695df2ed232b0cc6_11668629', 'page_content_container', $this->tplIndex);
?>

                </div>
            </div>
            <div class="pb-right-column col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11895192105df2ed232b0cc9_42073763', 'product_flags', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5148535885df2ed232d7dc6_64187433', 'page_header_container', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_738271215df2ed232d7dc9_24157371', 'product_prices', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20571324745df2ed232d7dc9_12403938', 'product_additional_info', $this->tplIndex);
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
                        <li>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17345552345df2ed232d7dc1_41404446', 'product_availability', $this->tplIndex);
?>

                        </li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13789327485df2ed232feec3_90873936', 'product_description_short', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46343365df2ed23325fc9_11671090', 'product_customization', $this->tplIndex);
?>

                    <?php }?>
                    
                
                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4918700995df2ed23325fc8_69575416', 'product_buy', $this->tplIndex);
?>

                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

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

        <div id="more_info_block" class="tabs">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7336034035df2ed2334d0c4_98234092', 'product_tabs', $this->tplIndex);
?>

        </div>
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9176683515df2ed233741c2_93625050', 'product_accessories', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15732584615df2ed2339b2c2_85446756', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16250141785df2ed2339b2c8_37761594', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2101704815df2ed2339b2c9_96879984', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
