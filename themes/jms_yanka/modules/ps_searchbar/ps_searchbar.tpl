{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="{$search_controller_url}">
	<h3 class="widget-title">{l s='Search' d='Shop.Theme.Catalog'}</h3>
	<form method="get" action="{$search_controller_url}">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Search Products...' d='Shop.Theme.Catalog'}">
		<button type="submit">
			<i>
				<svg aria-hidden="true" focusable="false" role="presentation"
					class="icon icon-theme-168" viewBox="0 0 24 24">
					<path d="M13.261 2.475a8.177 8.177 0 0 1 2.588 1.738 8.172 8.172 0 0 1 1.738 2.588 7.97 7.97 0 0 1 .635 3.164 7.836 7.836 0 0 1-.527 2.861 8.355 8.355 0 0 1-1.426 2.412l4.902 4.902c.117.131.176.28.176.449s-.059.319-.176.449c-.065.052-.137.095-.215.127s-.156.049-.234.049-.156-.017-.234-.049-.149-.075-.215-.127l-4.902-4.902c-.703.6-1.507 1.074-2.412 1.426s-1.859.528-2.862.528a7.945 7.945 0 0 1-3.164-.635 8.144 8.144 0 0 1-2.588-1.738 8.15 8.15 0 0 1-1.738-2.588 7.962 7.962 0 0 1-.635-3.164 7.97 7.97 0 0 1 .635-3.164 8.172 8.172 0 0 1 1.738-2.588 8.15 8.15 0 0 1 2.588-1.738c.989-.423 2.044-.635 3.164-.635s2.174.212 3.164.635zM3.759 12.641c.358.834.85 1.563 1.475 2.188s1.354 1.117 2.188 1.475c.833.358 1.726.537 2.676.537s1.843-.179 2.676-.537c.833-.357 1.563-.85 2.188-1.475s1.116-1.354 1.475-2.188a6.705 6.705 0 0 0 .537-2.676c0-.95-.179-1.842-.537-2.676-.358-.833-.85-1.563-1.475-2.188s-1.354-1.116-2.188-1.475c-.835-.356-1.727-.536-2.677-.536s-1.843.18-2.676.537c-.833.358-1.563.85-2.188 1.475S4.117 6.456 3.759 7.289a6.694 6.694 0 0 0-.537 2.676c0 .951.178 1.843.537 2.676z"/>
				</svg>
			</i>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
