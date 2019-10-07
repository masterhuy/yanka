<div class="cart-wrap clearfix">
	<a class="preview-image" href="{$product.url}" title="{$product.name|escape:'html':'UTF-8'}">
		<img alt="{$product.name|escape:'html':'UTF-8'}" src="{$product.cover.bySize.cart_default.url}" class="preview img-responsive" data-full-size-image-url = "{$product.cover.large.url}">
	</a>
	<div class="description"> 
		<a class="product-link" href="" title="{$product.name|escape:'html':'UTF-8'}">
			{$product.name}
		</a>
		<div class="property-value">
			{foreach from=$product.attributes item="property_value" key="property"}
				<span>{$property_value}</span>
			{/foreach}
		</div>
		<div class="line">
			<div class="quantity-formated">
				<span class="quantity">
					{$product.quantity} 
				</span>
				<span>x</span>
			</div>
			<div class="content_price">
				<span class="price new">
					{$product.price}
				</span>
			</div>
		</div>
		<span class="remove_link">
			<a class="remove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="remove-from-cart" title="{l s='Remove from cart' d='Shop.Theme.Actions'}" >
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
					<g>
						<path fill="currentColor" d="M5,24h14l1-17H4L5,24z M18.3,8.6l-0.8,13.8h-11L5.7,8.6H18.3z"></path>
						<rect x="2" y="3.2" fill="currentColor" width="20" height="1.6"></rect>
						<rect x="10" y="0.2" fill="currentColor" width="4" height="1.6"></rect>
					</g>
				</svg>
			</a>
		</span>
	</div>
</div>