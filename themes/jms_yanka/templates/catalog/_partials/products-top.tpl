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
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 left">
			<div class="view-mode ">
				{block name='sort_by'}
					{include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
				{/block}
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode right clearfix">
			<label class="sort-by">{l s='View as' d='Shop.Theme.Actions'}</label>
			<div class="button">
				<a class="view-grid {if $jpb_grid == 1}active{/if}" href="#">
					<i>
                        <svg aria-hidden="true" focusable="false"
                             role="presentation" class="icon icon-theme-186"
                             viewBox="0 0 24 24">
                            <path d="M2.828 2.567a.608.608 0 0 1 .449-.175h16.875c.183 0 .332.059.449.176s.176.268.176.449v16.875c0 .183-.059.332-.176.449s-.267.176-.449.176H3.277c-.183 0-.332-.059-.449-.176s-.176-.267-.176-.449V3.017c0-.182.059-.332.176-.45zm1.074 1.075v4.375h4.375V3.642H3.902zm4.375 5.625H3.902v4.375h4.375V9.267zm-4.375 10h4.375v-4.375H3.902v4.375zm10-11.25V3.642H9.527v4.375h4.375zm-4.375 1.25v4.375h4.375V9.267H9.527zm0 5.625v4.375h4.375v-4.375H9.527zm10-11.25h-4.375v4.375h4.375V3.642zm0 5.625h-4.375v4.375h4.375V9.267zm0 10v-4.375h-4.375v4.375h4.375z"/>
                        </svg>
                    </i>
				</a> 
				<a class="view-list {if $jpb_grid == 0}active{/if}" href="#">
					<i>
                        <svg aria-hidden="true" focusable="false"
                             role="presentation" class="icon icon-theme-187"
                             viewBox="0 0 24 24">
                            <path d="M20.574 2.567a.61.61 0 0 0-.449-.176H3.25c-.183 0-.332.059-.449.176s-.176.268-.176.45v16.875c0 .183.059.332.176.449s.267.176.449.176h16.875c.182 0 .332-.059.449-.176s.176-.267.176-.449V3.017a.613.613 0 0 0-.176-.45zM8.25 19.267H3.875v-4.375H8.25v4.375zm0-5.625H3.875V9.267H8.25v4.375zm0-5.625H3.875V3.642H8.25v4.375zm11.25 11.25h-10v-4.375h10v4.375zm0-5.625h-10V9.267h10v4.375zm0-5.625h-10V3.642h10v4.375z"/>
                        </svg>
                    </i>
				</a>
			</div>
		</div>
	</div>
</div>
