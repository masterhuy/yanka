{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="images-container">
    {block name='product_images'}
        <div class="js-qv-mask mask">
            <ul id="gal1" class="product-images js-qv-product-images">
                {foreach from=$product.images item=image}
                    <li class="thumb-container" data-image="{$image.bySize.large_default.url}" data-zoom-image="{$image.bySize.large_default.url}"> 
                        <img
                            class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                            data-image-medium-src="{$image.bySize.medium_default.url}"
                            data-image-large-src="{$image.bySize.large_default.url}"
                            src="{$image.bySize.large_default.url}"
                            alt="{$image.legend}"
                            title="{$image.legend}"
                            width="100"
                            itemprop="image"
                        >
                {/foreach}
            </ul>
        </div>
    {/block}
    {block name='product_cover'}
        <div class="product-cover">
            <img class="zoom_01 js-qv-product-cover" src="{$product.cover.bySize.large_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
            <div class="layer hidden-xs" data-toggle="modal" data-target="#product-modal">
                <i class="d-i-flex">
                    <svg aria-hidden="true" focusable="false"
                        role="presentation" class="icon icon-theme-166"
                        viewBox="0 0 24 24">
                        <path d="M13.316 2.475a8.177 8.177 0 0 1 2.588 1.738 8.172 8.172 0 0 1 1.738 2.588 7.97 7.97 0 0 1 .635 3.164 7.836 7.836 0 0 1-.527 2.861 8.355 8.355 0 0 1-1.426 2.412l4.902 4.902c.117.131.176.28.176.449s-.059.319-.176.449c-.065.052-.137.095-.215.127s-.156.049-.234.049-.156-.017-.234-.049-.149-.075-.215-.127l-4.902-4.902c-.703.6-1.507 1.074-2.412 1.426s-1.858.527-2.861.527a7.945 7.945 0 0 1-3.164-.635 8.144 8.144 0 0 1-2.588-1.738 8.15 8.15 0 0 1-1.738-2.588 7.962 7.962 0 0 1-.635-3.164A7.97 7.97 0 0 1 2.663 6.8 8.16 8.16 0 0 1 4.4 4.213a8.177 8.177 0 0 1 2.588-1.738c.99-.423 2.044-.635 3.164-.635s2.175.212 3.164.635zM3.814 12.641c.358.834.85 1.563 1.475 2.188s1.354 1.117 2.188 1.475c.833.358 1.726.537 2.676.537s1.843-.179 2.676-.537c.833-.357 1.563-.85 2.188-1.475s1.116-1.354 1.475-2.188a6.705 6.705 0 0 0 .537-2.676c0-.95-.179-1.842-.537-2.676-.358-.833-.85-1.563-1.475-2.188s-1.354-1.116-2.188-1.475c-.834-.356-1.726-.536-2.677-.536s-1.842.18-2.675.537c-.833.358-1.563.85-2.188 1.475S4.173 6.456 3.814 7.289a6.712 6.712 0 0 0-.537 2.676c0 .951.179 1.843.537 2.676zm9.278-3.116a.601.601 0 0 1 .186.439c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186h-1.875v1.875c0 .17-.062.316-.186.439-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.598.598 0 0 1-.186-.439V10.59H7.652a.6.6 0 0 1-.439-.186.598.598 0 0 1-.186-.439.6.6 0 0 1 .186-.439.6.6 0 0 1 .439-.186h1.875V7.465a.6.6 0 0 1 .186-.439c.124-.124.27-.186.439-.186s.315.063.439.186a.601.601 0 0 1 .186.439V9.34h1.875c.169 0 .316.062.44.185z"/>
                    </svg>
                </i> Zoom
            </div>
        </div>
    {/block}
</div>
{hook h='displayAfterProductThumbs'}
