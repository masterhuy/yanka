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
{block name='product_miniature_item'}
<div class="product-miniature js-product-miniature product-preview item-gutter-{$jpb_gutterwidth}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="preview">
		{block name='product_thumbnail'}
		  	<a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
				<img class="img-responsive product-img1"
				    src = "{$product.cover.bySize.home_default.url}"
				    alt = "{$product.cover.legend}"
					title = "{$product.name|escape:'html':'UTF-8'}"
				    data-full-size-image-url = "{$product.cover.large.url}"
				/>
				{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
					<img class="img-responsive product-img2"
					    src = "{$product.images.1.bySize.home_default.url}"
					    alt = "{$product.images.1.legend}"
						title = "{$product.name|escape:'html':'UTF-8'}"
					    data-full-size-image-url = "{$product.images.1.large.url}"
					/>
				{/if}
		  	</a>
			{block name='product_flags'}
				<ul class="product-flags">
					{foreach from=$product.flags item=flag}
						<li class="product-flag {$flag.type}">
							{if $flag.type == 'discount'}<span>{l s='Sale' d='Shop.Theme.Actions'}</span>{/if}
							{$flag.label}
						</li>
					{/foreach}
				</ul>
			{/block}
		{/block}
	</div>
						
	<div class="product-info">
		{block name='product_reviews'}
          {hook h='displayProductListReviews' product=$product}
        {/block}
		
        {if isset($jpb_categoryname) && $jpb_categoryname}
		    <div class="categoryname">
				<a class="hover-underline" href="{url entity='category' id=$product.id_category_default}">
				{$product.category|escape:'html':'UTF-8'}</a>
			</div>
	    {/if}
		{block name='product_name'}
			<a href="{$product.link|escape:'html'}" title="{$product.name|escape:'html':'UTF-8'}" class="product-link hover-underline" itemprop="name">{$product.name|truncate:50:'...'|escape:'html':'UTF-8'}</a>
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
				<span class="fa fa-spin fa-spinner"></span>
				<span class="fa fa-check">
					<i class="d-flex">
	                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-110" viewBox="0 0 24 24"><path
	                        d="M19.855 5.998a.601.601 0 0 0-.439-.186h-3.75c0-1.028-.368-1.911-1.104-2.646-.735-.735-1.618-1.104-2.646-1.104s-1.911.369-2.646 1.104c-.736.736-1.104 1.618-1.104 2.647h-3.75a.6.6 0 0 0-.439.186.598.598 0 0 0-.186.439v15a.6.6 0 0 0 .186.439c.124.123.27.186.439.186h15a.6.6 0 0 0 .439-.186.601.601 0 0 0 .186-.439v-15a.602.602 0 0 0-.186-.44zm-9.707-1.953c.488-.488 1.077-.732 1.768-.732s1.279.244 1.768.732.732 1.078.732 1.768h-5c0-.69.244-1.28.732-1.768zm6.926 7.194l-6.25 6.25a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .896.896 0 0 1-.215-.127l-2.5-2.5a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449.13-.117.28-.176.449-.176s.319.059.449.176l2.051 2.07 5.801-5.82c.13-.117.28-.176.449-.176s.319.059.449.176c.117.13.176.28.176.449a.652.652 0 0 1-.176.449z"/>
	                    </svg>
	                </i>
				</span>
				<span class="text-addcart">
					<i class="d-flex">
	                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-109" viewBox="0 0 24 24">
							<path d="M19.884 21.897a.601.601 0 0 1-.439.186h-15a.6.6 0 0 1-.439-.186.601.601 0 0 1-.186-.439v-15a.6.6 0 0 1 .186-.439.601.601 0 0 1 .439-.186h3.75c0-1.028.368-1.911 1.104-2.646.735-.735 1.618-1.104 2.646-1.104s1.911.368 2.646 1.104c.735.736 1.104 1.618 1.104 2.646h3.75a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439v15a.604.604 0 0 1-.186.439zM18.819 7.083h-3.125v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5h-5v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5H5.069v13.75h13.75V7.083zm-8.642-3.018a2.409 2.409 0 0 0-.733 1.768h5c0-.69-.244-1.279-.732-1.768s-1.077-.732-1.768-.732-1.279.244-1.767.732z"/>
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
			<span class="fa fa-spin fa-spinner"></span>
			<span class="fa fa-check"></span>
			<i class="icon-cart">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
					<path fill="currentColor" d="M22,8c0-1.1-0.9-2-2-2h-2.7c-0.9-3.4-2.9-5.8-5.3-5.8C9.6,0.2,7.6,2.6,6.7,6H4C2.9,6,2,6.9,2,8L0,22l0,0.1
					C0,23.2,0.9,24,2,24h20c1.1,0,2-0.8,2-1.9l0-0.1L22,8z M12,1.8c1.5,0,2.9,1.7,3.6,4.2H8.4C9.1,3.5,10.5,1.8,12,1.8z M22,22.4H2
					c-0.2,0-0.4-0.1-0.4-0.3l2-13.8l0-0.2c0-0.2,0.2-0.4,0.4-0.4h2.4C6.3,8.4,6.2,9.2,6.2,10h1.6c0-0.8,0.1-1.6,0.2-2.4h8
					c0.1,0.8,0.2,1.6,0.2,2.4h1.6c0-0.8-0.1-1.6-0.2-2.4H20c0.2,0,0.4,0.2,0.4,0.5l2,14C22.4,22.3,22.2,22.4,22,22.4z"></path>
				</svg>
			</i>
			<span class="text-addcart">
				{l s='Add to cart' d='Shop.Theme.Actions'}
			</span>
			<span class="text-added">
				{l s='Added' d='Shop.Theme.Actions'}
			</span>
			<span class="text-outofstock">
				{l s='SOLD OUT' d='Shop.Theme.Actions'}
			</span>								   
		</button>
    </div>
	<div class="btn-group">
		{if isset($jpb_wishlist) && $jpb_wishlist}							
			<a href="#" class="addToWishlist product-btn p-relative d-block" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}">
				<i class="d-flex">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
						<path fill="currentColor" d="M6.9,2.6c1.4,0,2.7,0.6,3.8,1.6l0.2,0.2L12,5.6l1.1-1.1l0.2-0.2c1-1,2.3-1.6,3.8-1.6s2.8,0.6,3.8,1.6
							c2.1,2.1,2.1,5.6,0,7.7L12,20.7l-8.9-8.9C1,9.7,1,6.2,3.1,4.1C4.2,3.2,5.5,2.6,6.9,2.6z M6.9,1C5.1,1,3.3,1.7,2,3.1
							c-2.7,2.7-2.7,7.2,0,9.9l10,10l10-9.9c2.7-2.8,2.7-7.3,0-10c-1.4-1.4-3.1-2-4.9-2c-1.8,0-3.6,0.7-4.9,2L12,3.3l-0.2-0.2
							C10.4,1.7,8.7,1,6.9,1z">
						</path>
					</svg>
				</i>
				<span class="tooltip-wrap left">
					<span class="tooltip-text">
						{l s='Add to Wishlist' d='Shop.Theme.Actions'}
					</span>
				</span>
			</a>
		{/if}
		<a href="#" data-link-action="quickview" class="d-flex flex-center p-relative quick-view product-btn">
			<i class="d-flex">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
					<g>
						<polygon fill="currentColor" points="11.8,7 10.2,7 10.2,10.2 7,10.2 7,11.8 10.2,11.8 10.2,15 11.8,15 11.8,11.8 15,11.8 15,10.2
							11.8,10.2">
						</polygon>
						<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
							l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z">
						</path>
					</g>
				</svg>
			</i>
			<span class="tooltip-wrap left">
				<span class="tooltip-text">
					{l s='Quick View' d='Shop.Theme.Actions'}
				</span>
			</span>
		</a>
	</div>
</div>
{/block}