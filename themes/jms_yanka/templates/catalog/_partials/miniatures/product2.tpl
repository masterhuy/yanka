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
<div class="product-miniature js-product-miniature product-preview product-box flex-box" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
	<div class="preview flexbox">
		{block name='product_thumbnail'}
		  <a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
			<img class="img-responsive product-img1 replace-2x"
			  src = "{$product.cover.bySize.large_default.url}"
			  alt = "{$product.cover.legend}"
			  data-full-size-image-url = "{$product.cover.large.url}"
			/>
			{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
				<img class="img-responsive product-img2 replace-2x"
				  src = "{$product.images.1.bySize.large_default.url}"
				  alt = "{$product.images.1.legend}"
				  data-full-size-image-url = "{$product.images.1.large.url}"
				/>
			{/if}
		  </a>
		{/block}				
	</div>

    <div class="product-info">
    	<div class="block-label">
		  	{block name='product_flags'}
				{if $product.has_discount}
					{if $product.discount_type === 'percentage'}
                	<span class="label label-discount discount-percentage discount-product">{$product.discount_percentage}</span>
					{/if}
				{/if}
		   {/block}	
		</div>
    	{if isset($jpb_categoryname) && $jpb_categoryname}
		    <span class="categoryname">
				<a href="{url entity='category' id=$product.id_category_default}">
				{$product.category|escape:'html':'UTF-8'}</a>
			</span>
	    {/if}
	    {block name='product_name'}
			<a href="{$product.link|escape:'html'}" class="product-link">{$product.name|truncate:40:'...'|escape:'html':'UTF-8'}</a>
	    {/block}
		    {block name='product_price_and_shipping'}
		        {if $product.show_price}
		          <div class="content_price">
		          	{if $product.has_discount}
		              {hook h='displayProductPriceBlock' product=$product type="old_price"}
		              <span class="old price">{$product.regular_price}</span>
		              <span class="from">{l s='from' d='Shop.Theme.Actions'}</span>
		            {/if}
		          	{hook h='displayProductPriceBlock' product=$product type="before_price"}
		            <span class="price new">{$product.price}</span>
		            
		            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

		            {hook h='displayProductPriceBlock' product=$product type='weight'}
		          </div>
		        {/if}
		    {/block}
	    <div class="product_button">
			<button {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Out of Stock' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" class="ajax-add-to-cart product-btn cart-button {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
				<span class="la la-spin la-spinner"></span>
				<span class="la la-check"></span>
				<span class="text-addcart">
					<i class="la la-cart-plus"></i>
					<span>{l s='Add to cart' d='Shop.Theme.Actions'}</span>
				</span>		
				<span class="text-outofstock">
					<i class="la la-ban"></i>
					<span>{l s='Out of stock' d='Shop.Theme.Actions'}</span>
				</span>								   
			</button>
		</div>
    </div>
   
</div>