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
{block name='content'}
    <section id="main">
        <section id="products">
            <div class="cat_desc">
                <div class="addon-title">
                    <h3>{$page.meta.title}</h3>
                </div>
            </div>
            {if $listing.products|count}
                <div id="">
                    {block name='product_list_top'}
                        {include file='catalog/_partials/products-top.tpl' listing=$listing}
                    {/block}
                </div>

                <div id="product_list" class="{if $activeFilters|count}active_filters{else}hide_filters{/if} product_list item-gutter-{$jpb_gutterwidth} {if $jpb_grid == 1}products-list-in-column{else}products-list-in-row{/if} products-list-{$jpb_productperrow}">
                    {block name='product_list'}
                        {include file='catalog/_partials/products.tpl' listing=$listing}
                    {/block}     
                </div>
                <div id="js-product-list-bottom">
                    {block name='product_list_bottom'}
                        {include file='catalog/_partials/products-bottom.tpl' listing=$listing}
                    {/block}
                </div>
            {else}
                {include file='errors/not-found.tpl'}
            {/if}
        </section>
    </section>
{/block}
