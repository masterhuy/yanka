{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="product-miniature js-product-miniature product-preview item-gutter-{$jpb_gutterwidth}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="preview">
		{block name='product_thumbnail'}
		  	<a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
				<img class="img-responsive product-img1"
				    src = "{$product.cover.bySize.home_default.url}"
				    alt = "{$product.cover.legend}"
					title="{$product.name|escape:'html':'UTF-8'}"
				    data-full-size-image-url = "{$product.cover.large.url}"
				/>
				{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
					<img class="img-responsive product-img2"
					    src = "{$product.images.1.bySize.home_default.url}"
					    alt = "{$product.images.1.legend}"
						title="{$product.name|escape:'html':'UTF-8'}"
					    data-full-size-image-url = "{$product.images.1.large.url}"
					/>
				{/if}
		  	</a>
			<div class="block-label">
			  	{block name='product_flags'}
					{foreach from=$product.flags item=flag}
						{if $flag.label == 'New'}
						    <span class="label label-new">{$flag.label}</span>
						{/if}
						{if $flag.label == 'On sale!'}
						    <span class="label label-sale">{l s='Sale' d='Shop.Theme.Actions'}</span>
						{/if}
					{/foreach}
					{if $product.has_discount}
						{if $product.discount_type === 'percentage'}
	                        <span class="label label-discount discount-percentage discount-product">{$product.discount_percentage}</span>
						{/if}
					{/if}
					{if $product.quantity < 1}
						<span class="label label-outstock">{l s='Out Stock' d='Shop.Theme.Actions'}</span>
					{/if}
			   	{/block}	
			</div>
	   	    <a href="#" data-link-action="quickview" class="d-flex flex-center quick-view product-btn hidden-xs">
				<i class="d-flex">
                    <svg aria-hidden="true" focusable="false" role="presentation"
                         class="icon icon-theme-154" viewBox="0 0 24 24">
                        <path d="M8.528 17.238c-1.107-.592-2.074-1.25-2.9-1.973-.827-.723-1.491-1.393-1.992-2.012-.501-.618-.771-.96-.811-1.025a.571.571 0 0 1-.117-.352c0-.13.039-.247.117-.352.039-.064.306-.406.801-1.025.495-.618 1.159-1.289 1.992-2.012.833-.723 1.803-1.38 2.91-1.973a7.424 7.424 0 0 1 3.555-.889c1.263 0 2.448.297 3.555.889 1.106.593 2.073 1.25 2.9 1.973.827.723 1.491 1.394 1.992 2.012.501.619.771.961.811 1.025a.573.573 0 0 1 .117.352.656.656 0 0 1-.117.371c-.039.053-.31.391-.811 1.016-.501.625-1.169 1.296-2.002 2.012-.833.717-1.804 1.371-2.91 1.963a7.375 7.375 0 0 1-3.535.889 7.415 7.415 0 0 1-3.555-.889zm.869-9.746c-.853.41-1.631.889-2.334 1.436s-1.312 1.101-1.826 1.66c-.515.561-.889.99-1.123 1.289.234.3.608.729 1.123 1.289.514.561 1.123 1.113 1.826 1.66s1.484 1.025 2.344 1.436 1.751.615 2.676.615c.924 0 1.813-.205 2.666-.615.853-.41 1.634-.889 2.344-1.436.709-.547 1.318-1.1 1.826-1.66.508-.56.885-.989 1.133-1.289a41.634 41.634 0 0 0-1.133-1.289c-.508-.56-1.113-1.113-1.816-1.66s-1.484-1.025-2.344-1.436-1.751-.615-2.676-.615c-.937 0-1.833.205-2.686.615zm.04 7.031c-.736-.735-1.104-1.617-1.104-2.646 0-1.028.368-1.91 1.104-2.646.735-.735 1.618-1.104 2.646-1.104 1.028 0 1.911.368 2.646 1.104.735.736 1.104 1.618 1.104 2.646 0 1.029-.368 1.911-1.104 2.646-.736.736-1.618 1.104-2.646 1.104-1.029 0-1.911-.367-2.646-1.104zm.878-4.414a2.41 2.41 0 0 0-.732 1.768c0 .69.244 1.279.732 1.768s1.077.732 1.768.732c.69 0 1.279-.244 1.768-.732s.732-1.077.732-1.768c0-.689-.244-1.279-.732-1.768s-1.078-.732-1.768-.732-1.279.244-1.768.732z"/>
                    </svg>
                </i>
                <span class="tooltip-wrap left">
			       	<span class="tooltip-text">
			      	 	{l s='Quick View' d='Shop.Theme.Actions'}
			   		</span>
		       </span>
			</a>
		{/block}
	</div>
						
	<div class="product-info">
        {if isset($jpb_categoryname) && $jpb_categoryname}
		    <span class="categoryname">
				<a href="{url entity='category' id=$product.id_category_default}">
				{$product.category|escape:'html':'UTF-8'}</a>
			</span>
	    {/if}
		{block name='product_name'}
			<a href="{$product.link|escape:'html'}" title="{$product.name|escape:'html':'UTF-8'}" class="product-link" itemprop="name">{$product.name|truncate:50:'...'|escape:'html':'UTF-8'}</a>
		{/block}
			  
		{block name='product_price_and_shipping'}
			{if $product.show_price}
			  <div class="content_price">
			  	{hook h='displayProductPriceBlock' product=$product type="before_price"}
				{if $product.has_discount}
				 	{hook h='displayProductPriceBlock' product=$product type="old_price"}
				  	<span class="old price">{$product.regular_price}</span>
				{/if}

				<span class="price new">{$product.price}</span>

				{hook h='displayProductPriceBlock' product=$product type='unit_price'}

				{hook h='displayProductPriceBlock' product=$product type='weight'}
			  </div>
			{/if}
		{/block}

		{block name='product_variants'}
			{if $product.main_variants}
				{if isset($jpb_pcolor) && $jpb_pcolor == 1}
					<div class="color_to_pick_list">
						{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
					</div>
				{/if}
			{/if}
		{/block}
		
		<div class="product-description">
			{$product.description_short|truncate:300:'...' nofilter}
		</div>
        <div class="product_button">
			<button class="btn-default ajax-add-to-cart product-btn {if $product.quantity < 1}disabled{/if} cart-button" {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" {if $product.quantity < 1}disabled{/if} data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
				<span class="la la-spin la-spinner"></span>
				<span class="la la-check">
					<i class="d-flex">
	                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-110" viewBox="0 0 24 24"><path
	                        d="M19.855 5.998a.601.601 0 0 0-.439-.186h-3.75c0-1.028-.368-1.911-1.104-2.646-.735-.735-1.618-1.104-2.646-1.104s-1.911.369-2.646 1.104c-.736.736-1.104 1.618-1.104 2.647h-3.75a.6.6 0 0 0-.439.186.598.598 0 0 0-.186.439v15a.6.6 0 0 0 .186.439c.124.123.27.186.439.186h15a.6.6 0 0 0 .439-.186.601.601 0 0 0 .186-.439v-15a.602.602 0 0 0-.186-.44zm-9.707-1.953c.488-.488 1.077-.732 1.768-.732s1.279.244 1.768.732.732 1.078.732 1.768h-5c0-.69.244-1.28.732-1.768zm6.926 7.194l-6.25 6.25a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .896.896 0 0 1-.215-.127l-2.5-2.5a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449.13-.117.28-.176.449-.176s.319.059.449.176l2.051 2.07 5.801-5.82c.13-.117.28-.176.449-.176s.319.059.449.176c.117.13.176.28.176.449a.652.652 0 0 1-.176.449z"/>
	                    </svg>
	                </i>
				</span>
				<span class="text-addcart">
					<i class="d-flex">
	                    <svg
	                        aria-hidden="true" focusable="false" role="presentation"
	                        class="icon icon-theme-109" viewBox="0 0 24 24"><path
	                        d="M19.884 21.897a.601.601 0 0 1-.439.186h-15a.6.6 0 0 1-.439-.186.601.601 0 0 1-.186-.439v-15a.6.6 0 0 1 .186-.439.601.601 0 0 1 .439-.186h3.75c0-1.028.368-1.911 1.104-2.646.735-.735 1.618-1.104 2.646-1.104s1.911.368 2.646 1.104c.735.736 1.104 1.618 1.104 2.646h3.75a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439v15a.604.604 0 0 1-.186.439zM18.819 7.083h-3.125v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5h-5v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5H5.069v13.75h13.75V7.083zm-8.642-3.018a2.409 2.409 0 0 0-.733 1.768h5c0-.69-.244-1.279-.732-1.768s-1.077-.732-1.768-.732-1.279.244-1.767.732z"/>
	                    </svg>
	                </i>
					{l s='Add to cart' d='Shop.Theme.Actions'}
				</span>
				<span class="text-added">
					{l s='Added' d='Shop.Theme.Actions'}
				</span>		
				<span class="text-outofstock">
					{l s='SOLD OUT' d='Shop.Theme.Actions'}
				</span>								   
			</button>
			<div class="btn-group">
				{if isset($jpb_wishlist) && $jpb_wishlist}							
					<a href="#" class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}">
						<i class="d-flex">
	                        <svg aria-hidden="true" focusable="false" role="presentation"
	                             class="icon icon-theme-180" viewBox="0 0 24 24">
	                            <path d="M21.486 6.599a5.661 5.661 0 0 0-1.25-1.865c-.56-.56-1.191-.979-1.895-1.26a5.77 5.77 0 0 0-4.326 0c-.71.28-1.345.7-1.904 1.26-.026.039-.056.075-.088.107l-.107.107-.107-.107a.706.706 0 0 1-.088-.107c-.56-.56-1.194-.979-1.904-1.26s-1.433-.42-2.168-.42-1.455.14-2.158.42-1.335.7-1.895 1.26c-.547.546-.964 1.168-1.25 1.865s-.43 1.429-.43 2.197.144 1.501.43 2.197.703 1.318 1.25 1.865l7.871 7.871c.003.003.007.004.011.006l.439.436.439-.437c.003-.002.007-.003.01-.006l7.871-7.871c.547-.547.964-1.169 1.25-1.865s.43-1.429.43-2.197-.145-1.5-.431-2.196zm-1.162 3.916a4.436 4.436 0 0 1-.967 1.445l-7.441 7.441-7.441-7.441c-.417-.417-.739-.898-.967-1.445s-.342-1.12-.342-1.719.114-1.172.342-1.719.55-1.035.967-1.465c.442-.43.94-.755 1.494-.977s1.116-.332 1.689-.332a4.496 4.496 0 0 1 3.467 1.641c.098.117.186.241.264.371.117.169.293.254.527.254s.41-.085.527-.254c.078-.13.166-.254.264-.371s.198-.228.303-.332a4.5 4.5 0 0 1 3.164-1.309c.573 0 1.136.11 1.689.332s1.052.547 1.494.977c.417.43.739.918.967 1.465s.342 1.12.342 1.719-.114 1.172-.342 1.719z"/>
	                        </svg>
	                    </i>
	                    <span class="tooltip-wrap top">
				       		<span class="tooltip-text">
				       			{l s='Wishlist' d='Shop.Theme.Actions'}
				       		</span>
			       		</span>
					</a>
				{/if}
			</div>
		</div>
	</div>
	<div class="product_action d-flex align-items-center">
		<button class="btn-default ajax-add-to-cart product-btn {if $product.quantity < 1}disabled{/if} cart-button" {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" {if $product.quantity < 1}disabled{/if} data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
			<span class="la la-spin la-spinner"></span>
			<span class="la la-check">
				<i class="d-flex">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-110" viewBox="0 0 24 24"><path
                        d="M19.855 5.998a.601.601 0 0 0-.439-.186h-3.75c0-1.028-.368-1.911-1.104-2.646-.735-.735-1.618-1.104-2.646-1.104s-1.911.369-2.646 1.104c-.736.736-1.104 1.618-1.104 2.647h-3.75a.6.6 0 0 0-.439.186.598.598 0 0 0-.186.439v15a.6.6 0 0 0 .186.439c.124.123.27.186.439.186h15a.6.6 0 0 0 .439-.186.601.601 0 0 0 .186-.439v-15a.602.602 0 0 0-.186-.44zm-9.707-1.953c.488-.488 1.077-.732 1.768-.732s1.279.244 1.768.732.732 1.078.732 1.768h-5c0-.69.244-1.28.732-1.768zm6.926 7.194l-6.25 6.25a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .896.896 0 0 1-.215-.127l-2.5-2.5a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449.13-.117.28-.176.449-.176s.319.059.449.176l2.051 2.07 5.801-5.82c.13-.117.28-.176.449-.176s.319.059.449.176c.117.13.176.28.176.449a.652.652 0 0 1-.176.449z"/>
                    </svg>
                </i>
			</span>
			<span class="text-addcart">
				<i class="d-flex">
                    <svg
                        aria-hidden="true" focusable="false" role="presentation"
                        class="icon icon-theme-109" viewBox="0 0 24 24"><path
                        d="M19.884 21.897a.601.601 0 0 1-.439.186h-15a.6.6 0 0 1-.439-.186.601.601 0 0 1-.186-.439v-15a.6.6 0 0 1 .186-.439.601.601 0 0 1 .439-.186h3.75c0-1.028.368-1.911 1.104-2.646.735-.735 1.618-1.104 2.646-1.104s1.911.368 2.646 1.104c.735.736 1.104 1.618 1.104 2.646h3.75a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439v15a.604.604 0 0 1-.186.439zM18.819 7.083h-3.125v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5h-5v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5H5.069v13.75h13.75V7.083zm-8.642-3.018a2.409 2.409 0 0 0-.733 1.768h5c0-.69-.244-1.279-.732-1.768s-1.077-.732-1.768-.732-1.279.244-1.767.732z"/>
                    </svg>
                </i>
				{l s='Add to cart' d='Shop.Theme.Actions'}
			</span>
			<span class="text-added">
				{l s='Added' d='Shop.Theme.Actions'}
			</span>		
			<span class="text-outofstock">
				{l s='SOLD OUT' d='Shop.Theme.Actions'}
			</span>								   
		</button>
		<div class="btn-group">
			{if isset($jpb_wishlist) && $jpb_wishlist}							
				<a href="#" class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}">
					<i class="d-flex">
                        <svg aria-hidden="true" focusable="false" role="presentation"
                             class="icon icon-theme-180" viewBox="0 0 24 24">
                            <path d="M21.486 6.599a5.661 5.661 0 0 0-1.25-1.865c-.56-.56-1.191-.979-1.895-1.26a5.77 5.77 0 0 0-4.326 0c-.71.28-1.345.7-1.904 1.26-.026.039-.056.075-.088.107l-.107.107-.107-.107a.706.706 0 0 1-.088-.107c-.56-.56-1.194-.979-1.904-1.26s-1.433-.42-2.168-.42-1.455.14-2.158.42-1.335.7-1.895 1.26c-.547.546-.964 1.168-1.25 1.865s-.43 1.429-.43 2.197.144 1.501.43 2.197.703 1.318 1.25 1.865l7.871 7.871c.003.003.007.004.011.006l.439.436.439-.437c.003-.002.007-.003.01-.006l7.871-7.871c.547-.547.964-1.169 1.25-1.865s.43-1.429.43-2.197-.145-1.5-.431-2.196zm-1.162 3.916a4.436 4.436 0 0 1-.967 1.445l-7.441 7.441-7.441-7.441c-.417-.417-.739-.898-.967-1.445s-.342-1.12-.342-1.719.114-1.172.342-1.719.55-1.035.967-1.465c.442-.43.94-.755 1.494-.977s1.116-.332 1.689-.332a4.496 4.496 0 0 1 3.467 1.641c.098.117.186.241.264.371.117.169.293.254.527.254s.41-.085.527-.254c.078-.13.166-.254.264-.371s.198-.228.303-.332a4.5 4.5 0 0 1 3.164-1.309c.573 0 1.136.11 1.689.332s1.052.547 1.494.977c.417.43.739.918.967 1.465s.342 1.12.342 1.719-.114 1.172-.342 1.719z"/>
                        </svg>
                    </i>
                    <span class="tooltip-wrap top">
			       		<span class="tooltip-text">
			       			{l s='Wishlist' d='Shop.Theme.Actions'}
			       		</span>
		       		</span>
				</a>
			{/if}
		</div>
    </div>
</div>

