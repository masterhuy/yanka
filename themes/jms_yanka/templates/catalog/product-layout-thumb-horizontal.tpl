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
{extends file=$layout}
{block name='head_seo' prepend}
    <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
    <meta property="og:type" content="product">
    <meta property="og:url" content="{$urls.current_url}">
    <meta property="og:title" content="{$page.meta.title}">
    <meta property="og:site_name" content="{$shop.name}">
    <meta property="og:description" content="{$page.meta.description}">
    <meta property="og:image" content="{$product.cover.large.url}">
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
    {if isset($product.weight) && ($product.weight != 0)}
        <meta property="product:weight:value" content="{$product.weight}">
        <meta property="product:weight:units" content="{$product.weight_unit}">
    {/if}
{/block}

{block name='content'}
    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="{$product.url}">
        <div class="row product-detail thumb-horizontal">
            <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pd-left-content">
                    {block name='page_content_container'}
                        <section class="page-content" id="content">
                            {block name='page_content'}
                                {block name='product_cover_tumbnails'}
                                    {include file='catalog/_partials/product-cover-thumbnails-horizontal.tpl'}
                                {/block}
                                <div class="scroll-box-arrows">
                                    <i class="fa fa-angle-left left"></i>
                                    <i class="fa fa-angle-right right"></i>
                                </div>
                            {/block}
                        </section>
                    {/block}
                </div>
            </div>
            <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                {block name='product_flags'}
                    {if $product.flags}
                        <ul class="product-flags">
                            {foreach from=$product.flags item=flag}
                                <li class="product-flag {$flag.type}">{$flag.label}</li>
                            {/foreach}
                        </ul>
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
                        <li id="product_vendor">
                            <label>{l s='Vendor:' d='Shop.Theme.Catalog'}</label>
                            <span class="editable">{Manufacturer::getnamebyid($product.id_manufacturer)}</span>
                        </li>
                        <li>
                            <label>{l s='Product Type: '}</label>
                            <a class="hover-underline editable" href="{url entity='category' id=$product.id_category_default}">
                                {$product.category|escape:'html':'UTF-8'}
                            </a
                        </li>
                    </ul>

                    {block name='product_description_short'}
                        <div id="product-description-short-{$product.id}" class="product-desc">{$product.description_short|truncate:350:"..." nofilter}</div>
                    {/block}

                    {if isset($product.specific_prices.to) && $product.specific_prices.to > 0}
                        <div class="specific_prices">
                            <div class="countdown-box">
                                <div class="countdown">{$product.specific_prices.to}</div>
                            </div>
                        </div>
                    {/if}
                
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

                                {hook h='displayProductButtons' product=$product}

                                {block name='product_refresh'}
                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
                                {/block}
                            </form>
                        {/block}
                    </div>
                    {hook h='displayReassurance'}
                </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_ld1s"></div>

                <div class="guaranteed text-center p-relative">
                    <span>{l s='Guaranteed safe checkout' d='Shop.Theme.Catalog'}</span>
                    <img class="img-responsive mg-auto px-15" src="themes/jms_yanka/assets/img/payments.png" alt="">
                </div>

                <div id="more_info_block" class="tabs">
                    {block name='product_tabs'}
                    <div class="panel-group" id="accordion">
                        {if $product.description}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#descriptionn">
                                        {l s='Description' d='Shop.Theme.Catalog'}
                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="descriptionn" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {block name='product_description'}
                                    <div class="product-description">{$product.description nofilter}</div>
                                    {/block}
                                </div>
                            </div>
                        </div>
                        {/if}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#product-detailss">
                                        {l s='Additional information' d='Shop.Theme.Catalog'}
                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="product-detailss" class="panel-collapse collapse">
                                <div class="panel-body">
                                {block name='product_details'}
                                    {include file='catalog/_partials/product-details.tpl'}
                                {/block}
                                </div>
                            </div>
                        </div>
                        {if $product.attachments}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#attachmentss">
                                        {l s='Attachments' d='Shop.Theme.Catalog'}
                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="attachmentss" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {block name='product_attachments'}
                                    {if $product.attachments}
                                        <div class="tab-pane fade in" id="attachments" role="tabpanel">
                                            <section class="product-attachments">
                                                <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</h3>
                                                {foreach from=$product.attachments item=attachment}
                                                    <div class="attachment">
                                                        <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                                                        <p>{$attachment.description}</p
                                                        <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                                                            {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                                                        </a>
                                                    </div>
                                                {/foreach}
                                            </section>
                                        </div>
                                    {/if}
                                    {/block}
                                </div>
                            </div>
                        </div>
                        {/if}
                        {foreach from=$product.extraContent item=extra key=extraKey}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#extra-{$extraKey}">
                                            {$extra.title}
                                            <span class="pt-icon">
                                                <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="extra-{$extraKey}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {foreach from=$product.extraContent item=extra key=extraKey}
                                            <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                                                {$extra.content nofilter}
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#review">
                                        {l s='Reviews' d='Shop.Theme.Catalog'}
                                        <span class="pt-icon">
                                            <svg viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="review" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {block name='product_footer'}
                                        {hook h='displayFooterProduct' product=$product category=$category}
                                    {/block}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/block}
                </div>

                
            </div>
        </div>
        
        {block name='product_accessories'}
            {if $accessories}
                <section class="product-accessories clearfix">
                    <div class="addon-title">
                        <h3>{l s='Accessories' d='Shop.Theme.Catalog'}</h3>
                    </div>
                
                    <div class="products accessories-carousel customs-carousel-product">      
                        {foreach from=$accessories item="product_accessory"}
                            <div class="item ajax_block_product">
                                {block name='product_miniature'}
                                    {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
                                {/block}  
                            </div>
                        {/foreach}
                    </div>
                </section>
            {/if}
        {/block}

        {block name='product_footer'}
            {hook h='displayFooterProduct' product=$product category=$category}
        {/block}

        {block name='product_images_modal'}
            {include file='catalog/_partials/product-images-modal.tpl'}
        {/block}

        {block name='page_footer_container'}
        
        {/block}
    </section>
{/block}