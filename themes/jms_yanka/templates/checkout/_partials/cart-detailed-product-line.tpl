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
<div class="product-line-grid">
    <!--  products -->
    <div class="row_cs product-info col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <span class="product-image media-middle">
            <div class="cart-line-product-actions ">
                <a
                    class                     = "remove-from-cart"
                    rel                       = "nofollow"
                    href                      = "{$product.remove_from_cart_url}"
                    data-link-action          = "delete-from-cart"
                    data-id-product           = "{$product.id_product|escape:'javascript'}"
                    data-id-product-attribute = "{$product.id_product_attribute|escape:'javascript'}"
                    data-id-customization     = "{$product.id_customization|escape:'javascript'}"
                >
                {if !isset($product.is_gift) || !$product.is_gift}
                    <i>
                        <svg aria-hidden="true" focusable="false" role="presentation"
                                class="icon icon-theme-165" viewBox="0 0 24 24">
                            <path d="M4.741 21.654a.601.601 0 0 1-.186-.439v-15h-1.25a.598.598 0 0 1-.439-.186.597.597 0 0 1-.186-.439.6.6 0 0 1 .186-.439.604.604 0 0 1 .439-.186h5v-2.5a.6.6 0 0 1 .186-.439.598.598 0 0 1 .439-.186h6.25c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439v2.5h5c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186h-1.25v15a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186H5.18a.598.598 0 0 1-.439-.186zM18.305 6.215h-12.5V20.59h12.5V6.215zM9.37 9.525a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965a.6.6 0 0 1 .186-.439.594.594 0 0 1 .438-.186c.169 0 .316.062.44.185zm.185-4.56h5V3.09h-5v1.875zm2.94 4.56a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965a.6.6 0 0 1 .186-.439.604.604 0 0 1 .439-.186c.168 0 .315.062.439.185zm2.246 0a.604.604 0 0 1 .439-.186c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965c0-.169.062-.316.186-.44z"/>
                        </svg>
                    </i>
                {/if}
                </a>
                {hook h='displayCartExtraProductActions' product=$product}
            </div>
            <div class="info">
                <img src="{$product.cover.bySize.large_default.url}" alt="{$product.name|escape:'quotes'}">
                <div class="product-line-info">
                    <a class="product-link" href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a>
                    {foreach from=$product.attributes key="attribute" item="value"}
                        <div class="product-info-value">
                            <span class="value">{$value}</span>
                        </div>
                    {/foreach}
                </div>
            </div>
            {if $product.customizations|count}
                {foreach from=$product.customizations item="customization"}
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-{$customization.id_customization}">{l s='Product customization' d='Shop.Theme.Catalog'}</a>
                    <div class="modal fade customization-modal" id="product-customizations-modal-{$customization.id_customization}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        
                                    </button>
                                    <h4 class="modal-title">{l s='Product customization' d='Shop.Theme.Catalog'}</h4>
                                </div>
                                <div class="modal-body">
                                    {foreach from=$customization.fields item="field"}
                                        <div class="product-customization-line row">
                                            <div class="col-sm-3 col-xs-4 label">
                                                {$field.label}
                                            </div>
                                            <div class="col-sm-9 col-xs-8 value">
                                                {if $field.type == 'text'}
                                                    {if (int)$field.id_module}
                                                        {$field.text nofilter}
                                                    {else}
                                                        {$field.text}
                                                    {/if}
                                                {elseif $field.type == 'image'}
                                                    <img src="{$field.image.small.url}">
                                                {/if}
                                            </div>
                                        </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </span>
    </div>

    <div class="row_cs product-right col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <!--  price -->
        <div class="row_cs product-price col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="product-line-info">
                <span class="value">{$product.price}</span>
                {if $product.unit_price_full}
                    <div class="unit-price-cart">{$product.unit_price_full}</div>
                {/if}
            </div>
        </div>

        <!--  qty -->
        <div class="row_cs product-qty col-lg-4 col-md-4 col-sm-4 col-xs-12">
            {if isset($product.is_gift) && $product.is_gift}
                <span class="gift-quantity">{$product.quantity}</span>
            {else}
            <input
                class="js-cart-line-product-quantity"
                data-down-url="{$product.down_quantity_url}"
                data-up-url="{$product.up_quantity_url}"
                data-update-url="{$product.update_quantity_url}"
                data-product-id="{$product.id_product}"
                type="text"
                value="{$product.quantity}"
                name="product-quantity-spin"
                min="{$product.minimal_quantity}"
            />
            {/if}
        </div>

        <!--  total -->
        <div class="row_cs product-total col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span class="product-price">
                <span class="value">
                    {if isset($product.is_gift) && $product.is_gift}
                    <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
                    {else}
                    {$product.total}
                    {/if}
                </span>
                <span class="value"> </span>
            </span>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
