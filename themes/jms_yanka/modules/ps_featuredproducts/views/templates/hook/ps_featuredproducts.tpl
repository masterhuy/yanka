<section id="featured-products" class="clearfix">
	<div class="addon-title">
		<h3 class="products-section-title">
			{l s='Popular Products' d='Shop.Theme.Catalog'}
		</h3>
	</div>
    <div class="product_box">
        <div class="products customs-product-carousel">
            {foreach from=$products item="product"}
                <div class="item ajax_block_product">
                    {include file="catalog/_partials/miniatures/product.tpl" product=$product}
                </div>
            {/foreach}
        </div>
    </div>
</section>