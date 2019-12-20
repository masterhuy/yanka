<div class="btn-group compact-hidden blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} dropdown {if isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartbottom'}shoppingcart-bottom{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#" class="cart-icon dropdown-toggle type1" data-toggle="dropdown" aria-expanded="false">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
			<path fill="currentColor" d="M22,8c0-1.1-0.9-2-2-2h-2.7c-0.9-3.4-2.9-5.8-5.3-5.8C9.6,0.2,7.6,2.6,6.7,6H4C2.9,6,2,6.9,2,8L0,22l0,0.1
			C0,23.2,0.9,24,2,24h20c1.1,0,2-0.8,2-1.9l0-0.1L22,8z M12,1.8c1.5,0,2.9,1.7,3.6,4.2H8.4C9.1,3.5,10.5,1.8,12,1.8z M22,22.4H2
			c-0.2,0-0.4-0.1-0.4-0.3l2-13.8l0-0.2c0-0.2,0.2-0.4,0.4-0.4h2.4C6.3,8.4,6.2,9.2,6.2,10h1.6c0-0.8,0.1-1.6,0.2-2.4h8
			c0.1,0.8,0.2,1.6,0.2,2.4h1.6c0-0.8-0.1-1.6-0.2-2.4H20c0.2,0,0.4,0.2,0.4,0.5l2,14C22.4,22.3,22.2,22.4,22,22.4z">
			</path>
		</svg>
		<span class="tooltip-wrap bottom">
			<span class="tooltip-text">
				{l s='Cart' d='Shop.Theme.Actions'}
			</span>
		</span>
		<span class="ajax_cart_quantity">{$cart.products_count}</span>
	</a>
	<div class="text-custom">
		<span class="cart_block_total ajax_block_cart_total">{$cart.totals.total.value}</span>
	</div>
	<a href="#" class="btn-xs dropdown-toggle tab-title" data-toggle="dropdown" aria-expanded="true">		 
		<span><span class="box-cart ajax_cart_quantity"> {$cart.products_count}</span> {l s='item(s) in your cart' mod='blockcart'}<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
	</a>
	<div class="dropdown-menu shoppingcart-box">
		<button id="close-button" class="close-button hidden-lg">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
				<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
			</svg>
			<span>Close</span>
		</button>
		<div class="shoppingcart-content">
			<span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
			{if $cart.products_count > 0}
				<span class="title">{l s='My Cart' d='Shop.Theme.Actions'}</span>
				<ul class="list products cart_block_list">
					{foreach from=$cart.products item=product}
						<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
					{/foreach}
				</ul>
			{/if}
		</div>
		{if $cart.products_count > 0}
			<div class="cart-prices">
				<div class="checkout-info">
					{foreach from=$cart.subtotals item="subtotal"}
						<div class="{if $subtotal.type == ''}hidden {else}$subtotal.type {/if} cart-prices-line">
							<span class="label">{$subtotal.label}:</span>
							<span class="value">{$subtotal.value}</span>
						</div>
					{/foreach}
				</div>
				<div class="cart-button">
					<a class="btn-default" href="{$urls.pages.order}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
						{l s='Proceed to checkout' d='Shop.Theme.Actions'}
					</a>
					<a class="view-cart" href="{$cart_url}" title="{l s='View shopping bag' d='Shop.Theme.Actions'}" rel="nofollow">
						{l s='View cart' d='Shop.Theme.Actions'}
					</a> 
				</div>
			</div>
		{/if}
	</div>
	<div class="bg-overlay"></div>
</div>
