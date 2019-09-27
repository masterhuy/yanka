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
<div class="product-add-to-cart">
    {if isset($configuration.is_catalog) && !$configuration.is_catalog}
        {block name='product_quantity'}
            <div class="title">
                {l s='Quantity' d='Shop.Theme.Actions'}
            </div>
            <div class="product-quantity">
                <div class="customs">
                    <div class="qty">
                      <input
                        type="text"
                        name="qty"
                        id="quantity_wanted"
                        value="{$product.quantity_wanted}"
                        class="input-group"
                        min="{$product.minimal_quantity}"
                      />
                    </div>
                </div>
      		    
                <div class="add">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-10">
                            <button title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" class="btn-default active add-to-cart product-btn cart-button {if $product.quantity < 1}disabled{/if}" data-button-action="add-to-cart" type="submit" {if !$product.add_to_cart_url}disabled{/if}>
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
                        </div>
            			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {if isset($jpb_wishlist) && $jpb_wishlist}                          
                                <a class="btn-default addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
                                    {l s='Add to wishlist' d='Shop.Theme.Actions'}
                                </a>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        {/block}

        {block name='product_availability'}
            <div class="not-enough-product mt-20">
                {if $product.show_availability && $product.availability_message}
                <span id="product-availability">
                    {if $product.availability == 'available'}
                        <span class="hidden" style="color:#fff; background:#25A799">{$product.availability_message}</span>
                    {elseif $product.availability == 'last_remaining_items'}
                        <i class="hidden material-icons product-last-items">&#xE002;</i>
                    {else}
                        <span style="color:#d43f3a;">{$product.availability_message}</span>
                    {/if}
                </span>
                {/if}
            </div>
        {/block}

        {block name='product_minimal_quantity'}
            <p class="product-minimal-quantity">
                {if $product.minimal_quantity > 1}
                    {l
                        s='The minimum purchase order quantity for the product is %quantity%.'
                        d='Shop.Theme.Checkout'
                        sprintf=['%quantity%' => $product.minimal_quantity]
                    }
                {/if}
            </p>
        {/block}
    {/if}
</div>
