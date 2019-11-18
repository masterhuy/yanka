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
<div class="cart-overview js-cart" data-refresh-url="{url entity='cart' params=['ajax' => true, 'action' => 'refresh']}">
    <div class="label-title hidden-xs">
        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">{l s='Products' d='Shop.Theme.Checkout'}</div>
        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12">{l s='Price' d='Shop.Theme.Checkout'}</div>
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">{l s='Quantity' d='Shop.Theme.Checkout'}</div>
            <div class="pd-0 col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">{l s='Total' d='Shop.Theme.Checkout'}</div>
        </div>
    </div>
    {if $cart.products}
        <ul class="cart-items">
            {foreach from=$cart.products item=product}
                <li class="cart-item">{include file='checkout/_partials/cart-detailed-product-line.tpl' product=$product}</li>
                {if $product.customizations|count >1}
                <hr>
                {/if}
            {/foreach}
        </ul>
    {else}
        <div class="no-items text-center">
            <svg width="119" height="119" viewBox="0 0 119 119" fill="none">
                <use xlink:href="#icon-empty_shopping_bag">
                    <symbol id="icon-empty_shopping_bag" fill="none" viewBox="0 0 100 119">
                        <path d="M5.86 119h88.28a5.865 5.865 0 0 0 5.86-5.859V21.484a1.953 1.953 0 0 0-1.953-1.953H84.375C84.375 8.761 75.613 0 64.844 0 54.05 0 45.313 8.73 45.313 19.531H30.468a1.953 1.953 0 0 0-1.953 1.953v32.657H1.953A1.953 1.953 0 0 0 0 56.094v57.047A5.865 5.865 0 0 0 5.86 119zm-1.954-5.859V97.109H49.22v16.032a1.955 1.955 0 0 1-1.953 1.953H5.859a1.955 1.955 0 0 1-1.953-1.953zm90.235 1.953H52.789a5.83 5.83 0 0 0 .336-1.953V97.109h42.969v16.032a1.955 1.955 0 0 1-1.953 1.953zM64.844 3.906c8.616 0 15.625 7.01 15.625 15.625h-31.25c0-8.635 6.984-15.625 15.625-15.625zM32.422 23.438h12.89v8.984H43.36a1.953 1.953 0 1 0 0 3.906h7.813a1.953 1.953 0 1 0 0-3.906H49.22v-8.984h31.25v8.984h-1.953a1.953 1.953 0 1 0 0 3.906h7.812a1.953 1.953 0 1 0 0-3.906h-1.953v-8.984h11.719v69.765h-42.97v-37.11a1.953 1.953 0 0 0-1.953-1.952h-18.75V23.438zm16.797 34.609v35.156H3.906V58.047H49.22z" fill="currentColor"></path>
                        <path d="M14.844 69.766v3.906c0 6.474 5.244 11.719 11.719 11.719 6.462 0 11.718-5.257 11.718-11.72v-3.905a1.953 1.953 0 1 0 0-3.907h-3.906a1.953 1.953 0 1 0 0 3.907v3.906c0 4.307-3.505 7.812-7.813 7.812a7.812 7.812 0 0 1-7.812-7.812v-3.906a1.953 1.953 0 1 0 0-3.907h-3.906a1.953 1.953 0 1 0 0 3.907z" fill="currentColor"></path>
                    </symbol>
                </use>
            </svg>
            <h3>{l s='Shopping Bag is Empty' d='Shop.Theme.Checkout'}</h3>
            <span>{l s='Your shopping bag is empty.' d='Shop.Theme.Checkout'}</span>
            <a class="btn-border" href="{$urls.pages.index}">
                {l s='Continue shopping' d='Shop.Theme.Actions'}
            </a>
        </div>
    {/if}
</div>
