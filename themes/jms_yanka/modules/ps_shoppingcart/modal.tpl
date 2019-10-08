<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
						<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
					</svg>
				</button>
				<h4 class="modal-title text-xs-center" id="myModalLabel">
					{l s='Added to Cart Successfully!' d='Shop.Theme.Checkout'}
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="layout-column col-md-12 col-xs-12 divide-right">
						<div class="img">
							<img class="product-image" src="{$product.cover.medium.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">        
						</div>
						<div class="details">
							<h6 class="h6 product-name">{$product.name}</h6>
							<div class="property-value">
								{foreach from=$product.attributes item="property_value" key="property"}
									<span>{$property_value}</span>
								{/foreach}
							</div>
							<div class="content_price">
								<span class="price new">{$product.price}</span>
							</div>
							{hook h='displayProductPriceBlock' product=$product type="unit_price"}
						</div>
					</div>
					<div class="layout-column col-md-12 col-xs-12 divide-left">
						<div class="cart-content">
							{if $cart.products_count > 1}
								<p class="cart-products-count">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
							{else}
								<p class="cart-products-count">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
							{/if}
							<p>{l s='Shipping:' d='Shop.Theme.Checkout'}{$cart.subtotals.shipping.value} {hook h='displayCheckoutSubtotalDetails' subtotal=$cart.subtotals.shipping}</p>
							<p>{l s='Total:' d='Shop.Theme.Checkout'}{$cart.totals.total.value} {$cart.labels.tax_short}</p>
							<button type="button" class="btn-default active" data-dismiss="modal">
								<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L2 10L11 19" stroke="white" stroke-width="1.6"></path>
								</svg>
								{l s='Continue shopping' d='Shop.Theme.Actions'}
							</button>
							<a class="view-cart" href="{$cart_url}" title="{l s='View shopping bag' d='Shop.Theme.Actions'}" rel="nofollow">
								{l s='View Cart' d='Shop.Theme.Actions'}
							</a> 
							<a href="{$cart_url}" class="btn-default">
								{l s='proceed to checkout' d='Shop.Theme.Actions'}
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
