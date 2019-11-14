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
{if $cart.vouchers.allowed}
    <div class="block-promo">
        <div class="cart-voucher">
            {if $cart.vouchers.added}
                <ul class="promo-name card-block">
                    {foreach from=$cart.vouchers.added item=voucher}
                        <li class="cart-summary-line">
                            <span class="label">{$voucher.name}</span>
                            <a href="{$voucher.delete_url}" data-link-action="remove-voucher" class="pull-right">
                                <i>
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                            class="icon icon-theme-165" viewBox="0 0 24 24">
                                        <path d="M4.741 21.654a.601.601 0 0 1-.186-.439v-15h-1.25a.598.598 0 0 1-.439-.186.597.597 0 0 1-.186-.439.6.6 0 0 1 .186-.439.604.604 0 0 1 .439-.186h5v-2.5a.6.6 0 0 1 .186-.439.598.598 0 0 1 .439-.186h6.25c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439v2.5h5c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186h-1.25v15a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186H5.18a.598.598 0 0 1-.439-.186zM18.305 6.215h-12.5V20.59h12.5V6.215zM9.37 9.525a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965a.6.6 0 0 1 .186-.439.594.594 0 0 1 .438-.186c.169 0 .316.062.44.185zm.185-4.56h5V3.09h-5v1.875zm2.94 4.56a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965a.6.6 0 0 1 .186-.439.604.604 0 0 1 .439-.186c.168 0 .315.062.439.185zm2.246 0a.604.604 0 0 1 .439-.186c.169 0 .315.063.439.186a.601.601 0 0 1 .186.439v6.875c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V9.965c0-.169.062-.316.186-.44z"/>
                                    </svg>
                                </i>
                            </a>
                            <div class="pull-xs-right">
                                {$voucher.reduction_formatted}
                            </div>
                        </li>
                    {/foreach}
                </ul>
            {/if}
            
            <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
                {l s='Have a promo code?' d='Shop.Theme.Checkout'}
            </a>
            
            <div class="promo-code collapse{if $cart.discounts|count > 0} in{/if}" id="promo-code">
                <form action="{$urls.pages.cart}" data-link-action="add-voucher" method="post">
                    <input type="hidden" name="token" value="{$static_token}">
                    <input type="hidden" name="addDiscount" value="1">
                    <input class="promo-input" type="text" name="discount_name" placeholder="{l s='Promo code' d='Shop.Theme.Checkout'}">
                    <button type="submit" class="btn-default w-100">{l s='Add' d='Shop.Theme.Actions'}</button>
                </form>
                <div class="alert alert-danger js-error" role="alert">
                    <div class="alert-content">
                        <i class="material-icons">&#xE001;</i>
                        <span class="m-l-1 js-error-text"></span>
                    </div>
                </div>
            </div>
            {if $cart.discounts|count > 0}
                <p class="block-promo promo-highlighted">
                    {l s='Take advantage of our exclusive offers:' d='Shop.Theme.Actions'}
                </p>
                <ul class="js-discount card-block promo-discounts">
                    {foreach from=$cart.discounts item=discount}
                        <li class="cart-summary-line">
                            <span class="label"><span class="code">{$discount.code}</span> - {$discount.name}</span>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </div>
    </div>
{/if}
