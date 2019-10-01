{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE WishList -->
<a class="wishlist_top home_page lnk_wishlist p-relative" href="{$link->getModuleLink('jmswishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
		<path fill="currentColor" d="M6.9,2.6c1.4,0,2.7,0.6,3.8,1.6l0.2,0.2L12,5.6l1.1-1.1l0.2-0.2c1-1,2.3-1.6,3.8-1.6s2.8,0.6,3.8,1.6
		c2.1,2.1,2.1,5.6,0,7.7L12,20.7l-8.9-8.9C1,9.7,1,6.2,3.1,4.1C4.2,3.2,5.5,2.6,6.9,2.6z M6.9,1C5.1,1,3.3,1.7,2,3.1
		c-2.7,2.7-2.7,7.2,0,9.9l10,10l10-9.9c2.7-2.8,2.7-7.3,0-10c-1.4-1.4-3.1-2-4.9-2c-1.8,0-3.6,0.7-4.9,2L12,3.3l-0.2-0.2
		C10.4,1.7,8.7,1,6.9,1z">
		</path>
	</svg>
    <span class="tooltip-wrap bottom">
       	<span class="tooltip-text">
      	 	{l s='Wishlist' d='Shop.Theme.Actions'}
   		</span>
   </span>
</a>
<a class=" wishlist_top my_account lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{$link->getModuleLink('jmswishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' d='Shop.Theme.Actions'}">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		{l s='My wishlists' d='Shop.Theme.Actions'}
	</span>
</a>
<!-- END : MODULE WishList -->