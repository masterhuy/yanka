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
				{l s='Remove' d='Shop.Theme.Actions'}
			</a>
		</span>
	</div>
</div>