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
<div id="quickview-modal-{$product.id}-{$product.id_product_attribute}" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog cover_product1 container" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                </button>
            </div>
            <div class="modal-body" id="main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs-down left">
                        {block name='product_cover_tumbnails'}
                            {include file='catalog/_partials/product-cover-thumbnails-quickview.tpl'}
                        {/block}
                        <div class="arrows js-arrows">
                            <i class="material-icons arrow-up js-arrow-up"></i>
                            <i class="material-icons arrow-down js-arrow-down"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs-down right">
                        {block name='product_flags'}
                            {if $product.flags}
                                <ul class="product-flags">
                                    {foreach from=$product.flags item=flag}
                                        <li class="product-flag {$flag.type}">{$flag.label}</li>
                                    {/foreach}
                                </ul>
                            {/if}
                        {/block}

                        {block name='product_availability'}
                            {if $product.show_availability && $product.availability_message}
                                {if $product.availability == 'unavailable'}
                                    <div class="not-enough-product"> 
                                        <span id="product-availability">
                                            {$product.availability_message}
                                        </span>
                                    </div>
                                {/if}
                            {/if}
                        {/block}

                        {block name='page_header_container'}
                            {block name='page_header'}
                                <h2 itemprop="name" class="pd-name">{block name='page_title'}{$product.name}{/block}</h2>
                            {/block}
                        {/block}
                        
                        {block name='product_prices'}
                            {include file='catalog/_partials/product-prices.tpl'}
                        {/block}

                        {block name='product_additional_info'}
                            {include file='catalog/_partials/product-additional-info.tpl'}
                        {/block}
                
                        <div class="product-information">
                            <ul class="other-info">
                                {if $product.reference}
                                    <li id="product_reference">
                                        <label>{l s='Product Code:' d='Shop.Theme.Catalog'}</label>
                                        <span class="editable">{$product.reference}</span>
                                    </li>
                                {/if}
                                <li>
                                    {block name='product_availability'}
                                        {if $product.show_availability && $product.availability_message}
                                            <li>
                                                <label>{l s='Availability:' d='Shop.Theme.Catalog'}</label>
                                                <span class="editable">
                                                    {if $product.availability == 'available'}
                                                        {$product.availability_message}
                                                    {elseif $product.availability == 'last_remaining_items'}
                                                        <i class="material-icons product-last-items">&#xE002;</i>
                                                    {else}
                                                        {$product.availability_message}
                                                    {/if}
                                                </span>
                                            </li>
                                        {/if}
                                    {/block}
                                </li>
                                {if $product.id_manufacturer}
                                    <li id="product_vendor">
                                        <label>{l s='Vendor:' d='Shop.Theme.Catalog'}</label>
                                        <span class="editable">{Manufacturer::getnamebyid($product.id_manufacturer)}</span>
                                    </li>
                                {/if}
                                <li class="product-category">
                                    <label>{l s='Product Type: '}</label>
                                    <a class="editable" href="{url entity='category' id=$product.id_category_default}">
                                        {$product.category|escape:'html':'UTF-8'}
                                    </a
                                </li>
                            </ul>

                            {block name='product_description_short'}
                                <div id="product-description-short-{$product.id}" class="product-desc">{$product.description_short|truncate:350:"..." nofilter}</div>
                            {/block}
                        
                            {if $product.is_customizable && count($product.customizations.fields)}
                                {block name='product_customization'}
                                    {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                                {/block}
                            {/if}
                            
                        
                            <div class="product-actions">
                                {block name='product_buy'}
                                    <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                                        <input type="hidden" name="token" value="{$static_token}">
                                        <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                                        <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

                                        {block name='product_pack'}
                                            {if $packItems}
                                                <section class="product-pack">
                                                    <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                                                    <article>
                                                        <div class="card">
                                                            <div class="pack-product-container">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Products</th>
                                                                            <th>Price</th>
                                                                            <th>Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    {foreach from=$packItems item="product_pack"}
                                                                        {block name='product_miniature'}
                                                                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                                                                        {/block}
                                                                    {/foreach}
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </section>
                                            {/if}
                                        {/block}
                                        
                                        {block name='product_discounts'}
                                            {include file='catalog/_partials/product-discounts.tpl'}
                                        {/block}
                                        
                                        {block name='product_variants'}
                                            {include file='catalog/_partials/product-variants.tpl'}
                                        {/block}

                                        {block name='product_add_to_cart'}
                                            {include file='catalog/_partials/product-add-to-cart.tpl'}
                                        {/block}

                                    </form>

                                    <a href="{$product.link|escape:'html'}" class="view-full">
                                        {l s='View full info' d='Shop.Theme.Catalog'}
                                    </a>
                                {/block}
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
