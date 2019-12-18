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
                        />
                {/foreach}
                <li class="thumb-container product-cover video">{hook h='displayReassurance'}
            </ul>
        </div>
        
    {/block}
    {block name='product_cover'}
        <div class="product-cover">
            <img class="zoom_01 js-qv-product-cover" src="{$product.cover.bySize.large_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
            <div class="layer hidden-xs" data-toggle="modal" data-target="#product-modal">
                <i class="d-i-flex">
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
            </div>
        </div>
    {/block}
</div>
{hook h='displayAfterProductThumbs'}
