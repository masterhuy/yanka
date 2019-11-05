<?php
/* Smarty version 3.1.33, created on 2019-11-04 20:46:03
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\catalog\product-layout-default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc0d45b328236_72212225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f73f6e9ce83edeb919a9d7feed849ba937ee83' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\catalog\\product-layout-default.tpl',
      1 => 1572316112,
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
function content_5dc0d45b328236_72212225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8482180775dc0d45b271539_11346661', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6856169025dc0d45b271531_88069476', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7105422975dc0d45b271537_61547229', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_8482180775dc0d45b271539_11346661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_8482180775dc0d45b271539_11346661',
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
class Block_6856169025dc0d45b271531_88069476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_6856169025dc0d45b271531_88069476',
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
class Block_16289829235dc0d45b271537_02950890 extends Smarty_Internal_Block
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
class Block_9133442115dc0d45b271530_48568289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16289829235dc0d45b271537_02950890', 'product_cover_tumbnails', $this->tplIndex);
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
class Block_18851296355dc0d45b271539_87862274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section class="page-content" id="content">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9133442115dc0d45b271530_48568289', 'page_content', $this->tplIndex);
?>

                        </section>
                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_flags'} */
class Block_17606167785dc0d45b271535_86485918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_availability'} */
class Block_18909297275dc0d45b271537_31131359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                    <span id="product-availability">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                            <span style="color:#fff; background:#25A799"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                            <i class="material-icons product-last-items">&#xE002;</i>
                        <?php } else { ?>
                            <span style="color:#fff; background:#858585;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                    </span>
                    <?php }?>
                <?php
}
}
/* {/block 'product_availability'} */
/* {block 'page_title'} */
class Block_19553257255dc0d45b2ae436_63904109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_16946402165dc0d45b2ae439_25990169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h2 itemprop="name" class="pd-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19553257255dc0d45b2ae436_63904109', 'page_title', $this->tplIndex);
?>
</h2>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_7113064205dc0d45b2ae438_90078236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16946402165dc0d45b2ae439_25990169', 'page_header', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_13027919455dc0d45b2ae439_89097500 extends Smarty_Internal_Block
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
class Block_21211746405dc0d45b2ae431_65611519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_description_short'} */
class Block_10505981065dc0d45b2ae438_21797476 extends Smarty_Internal_Block
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
class Block_8436178835dc0d45b2ae436_96581953 extends Smarty_Internal_Block
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
class Block_2583569475dc0d45b2ae432_82868539 extends Smarty_Internal_Block
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
class Block_19820999935dc0d45b2ae438_71708660 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2583569475dc0d45b2ae432_82868539', 'product_miniature', $this->tplIndex);
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
class Block_11297487755dc0d45b2ae439_86237308 extends Smarty_Internal_Block
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
class Block_14534069305dc0d45b2eb339_10462622 extends Smarty_Internal_Block
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
class Block_8887152405dc0d45b2eb335_39947732 extends Smarty_Internal_Block
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
class Block_10887290675dc0d45b2eb339_03233907 extends Smarty_Internal_Block
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
class Block_19789559975dc0d45b2ae431_08277089 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19820999935dc0d45b2ae438_71708660', 'product_pack', $this->tplIndex);
?>

                                
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11297487755dc0d45b2ae439_86237308', 'product_discounts', $this->tplIndex);
?>

                                
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14534069305dc0d45b2eb339_10462622', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8887152405dc0d45b2eb335_39947732', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10887290675dc0d45b2eb339_03233907', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_12536381975dc0d45b2eb332_28378196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                                    <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_3552719575dc0d45b2eb331_63234867 extends Smarty_Internal_Block
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
class Block_12044325915dc0d45b2eb330_78074733 extends Smarty_Internal_Block
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
</p
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
/* {block 'product_tabs'} */
class Block_19110843105dc0d45b2eb336_47915025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="panel-group" id="accordion">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#descriptionn">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="descriptionn" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12536381975dc0d45b2eb332_28378196', 'product_description', $this->tplIndex);
?>

                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#product-detailss">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="product-detailss" class="panel-collapse collapse">
                                <div class="panel-body">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3552719575dc0d45b2eb331_63234867', 'product_details', $this->tplIndex);
?>

                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#attachmentss">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="attachmentss" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12044325915dc0d45b2eb330_78074733', 'product_attachments', $this->tplIndex);
?>

                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>

                                            <span class="pt-icon">
                                                <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_6341368685dc0d45b328233_83540272 extends Smarty_Internal_Block
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
class Block_2477885175dc0d45b2eb338_54024751 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6341368685dc0d45b328233_83540272', 'product_miniature', $this->tplIndex);
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
class Block_133829055dc0d45b328237_11360518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_6087094085dc0d45b328232_07748858 extends Smarty_Internal_Block
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
class Block_1578040545dc0d45b328236_88986250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7105422975dc0d45b271537_61547229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7105422975dc0d45b271537_61547229',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18851296355dc0d45b271539_87862274',
  ),
  'page_content' => 
  array (
    0 => 'Block_9133442115dc0d45b271530_48568289',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_16289829235dc0d45b271537_02950890',
  ),
  'product_flags' => 
  array (
    0 => 'Block_17606167785dc0d45b271535_86485918',
  ),
  'product_availability' => 
  array (
    0 => 'Block_18909297275dc0d45b271537_31131359',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7113064205dc0d45b2ae438_90078236',
  ),
  'page_header' => 
  array (
    0 => 'Block_16946402165dc0d45b2ae439_25990169',
  ),
  'page_title' => 
  array (
    0 => 'Block_19553257255dc0d45b2ae436_63904109',
  ),
  'product_prices' => 
  array (
    0 => 'Block_13027919455dc0d45b2ae439_89097500',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_21211746405dc0d45b2ae431_65611519',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_10505981065dc0d45b2ae438_21797476',
  ),
  'product_customization' => 
  array (
    0 => 'Block_8436178835dc0d45b2ae436_96581953',
  ),
  'product_buy' => 
  array (
    0 => 'Block_19789559975dc0d45b2ae431_08277089',
  ),
  'product_pack' => 
  array (
    0 => 'Block_19820999935dc0d45b2ae438_71708660',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_2583569475dc0d45b2ae432_82868539',
    1 => 'Block_6341368685dc0d45b328233_83540272',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_11297487755dc0d45b2ae439_86237308',
  ),
  'product_variants' => 
  array (
    0 => 'Block_14534069305dc0d45b2eb339_10462622',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_8887152405dc0d45b2eb335_39947732',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_10887290675dc0d45b2eb339_03233907',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_19110843105dc0d45b2eb336_47915025',
  ),
  'product_description' => 
  array (
    0 => 'Block_12536381975dc0d45b2eb332_28378196',
  ),
  'product_details' => 
  array (
    0 => 'Block_3552719575dc0d45b2eb331_63234867',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_12044325915dc0d45b2eb330_78074733',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_2477885175dc0d45b2eb338_54024751',
  ),
  'product_footer' => 
  array (
    0 => 'Block_133829055dc0d45b328237_11360518',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_6087094085dc0d45b328232_07748858',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1578040545dc0d45b328236_88986250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="row product-detail default">
            <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pd-left-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18851296355dc0d45b271539_87862274', 'page_content_container', $this->tplIndex);
?>

                </div>
            </div>
            <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17606167785dc0d45b271535_86485918', 'product_flags', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18909297275dc0d45b271537_31131359', 'product_availability', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7113064205dc0d45b2ae438_90078236', 'page_header_container', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13027919455dc0d45b2ae439_89097500', 'product_prices', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21211746405dc0d45b2ae431_65611519', 'product_additional_info', $this->tplIndex);
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
                        <li id="product_vendor">
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vendor:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                            <span class="editable"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </li>
                        <li>
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Type: '),$_smarty_tpl ) );?>
</label>
                            <a class="hover-underline editable" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </a
                        </li>
                    </ul>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10505981065dc0d45b2ae438_21797476', 'product_description_short', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8436178835dc0d45b2ae436_96581953', 'product_customization', $this->tplIndex);
?>

                    <?php }?>
                    
                
                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19789559975dc0d45b2ae431_08277089', 'product_buy', $this->tplIndex);
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

                <div id="more_info_block" class="tabs">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19110843105dc0d45b2eb336_47915025', 'product_tabs', $this->tplIndex);
?>

                </div>
            </div>
        </div>
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2477885175dc0d45b2eb338_54024751', 'product_accessories', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133829055dc0d45b328237_11360518', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6087094085dc0d45b328232_07748858', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1578040545dc0d45b328236_88986250', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
