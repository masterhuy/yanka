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
<!doctype html>
<html lang="{$language.iso_code}">

    <head>
        {block name='head'}
            {include file='_partials/head.tpl'}
        {/block}
    </head>

    <body id="{$page.page_name}" class="{$page.body_classes|classnames} {if isset($jpb_homeclass) && $jpb_homeclass}{$jpb_homeclass}{/if}">
        {hook h='displayAfterBodyOpeningTag'}
        {if $jpb_mobilemenu}
            <div class="menu-wrap hidden-lg">
    			<button id="close-button" class="close-button">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                    <span>Close</span>
                </button>
    			<nav id="off-canvas-menu">					
    				{hook h='displayTopColumn'}
    			</nav>				
    		</div>
        {/if}
        <div class="main-site">
            <header id="header">
                {block name='header'}
                    {include file='_partials/header.tpl'}
                {/block}
            </header>
        
            {block name='notifications'}
                {include file='_partials/notifications.tpl'}
            {/block}

            {block name='breadcrumb'}
                {include file='_partials/breadcrumb.tpl'}
            {/block}
            <section id="wrapper">
                <div class="container">
                    {block name='content'}
                            <section id="content">
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 left">
                                    {render file='checkout/checkout-process.tpl' ui=$checkout_process}
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 right">
                                    <div class="right-box">
                                        {include file='checkout/_partials/cart-summary.tpl' cart = $cart}
                                        {hook h='displayReassurance'}
                                    </div>
                                </div>
                            </div>
                        </section>
                    {/block}
                </div>
            </section>

            <footer id="footer">
                {block name='footer'}
                    {include file='_partials/footer.tpl'}
                {/block}
            </footer>

            {block name='javascript_bottom'}
                {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
            {/block}

            {hook h='displayBeforeBodyClosingTag'}
        </div>
    </body>
</html>
