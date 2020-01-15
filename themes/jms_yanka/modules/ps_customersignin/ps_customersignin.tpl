{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-1">
		{if $logged} 
			<a href="#" class="account p-relative" data-toggle="collapse" data-target="#user-info-1">      
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
					<g>
						<path fill="currentColor" d="M12,13C6.4,13,2,17.8,2,24h20C22,17.8,17.6,13,12,13z M12,14.6c4.2,0,7.6,3.3,8.3,7.8H3.7
							C4.4,17.9,7.8,14.6,12,14.6z"></path>
						<path fill="currentColor" d="M12,12c3.3,0,6-2.7,6-6s-2.7-6-6-6S6,2.7,6,6S8.7,12,12,12z M12,1.6c2.4,0,4.4,2,4.4,4.4s-2,4.4-4.4,4.4
							c-2.4,0-4.4-2-4.4-4.4S9.6,1.6,12,1.6z"></path>
					</g>
				</svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	{l s='Account' d='Shop.Theme.Actions'}
			   		</span>
		       </span>
		  	</a>
			<div id="user-info-1" class="collapse">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}">{$customerName}</a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#" class="account p-relative" data-toggle="collapse" data-target="#user-info-1">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
					<g>
						<path fill="currentColor" d="M12,13C6.4,13,2,17.8,2,24h20C22,17.8,17.6,13,12,13z M12,14.6c4.2,0,7.6,3.3,8.3,7.8H3.7
							C4.4,17.9,7.8,14.6,12,14.6z"></path>
						<path fill="currentColor" d="M12,12c3.3,0,6-2.7,6-6s-2.7-6-6-6S6,2.7,6,6S8.7,12,12,12z M12,1.6c2.4,0,4.4,2,4.4,4.4s-2,4.4-4.4,4.4
							c-2.4,0-4.4-2-4.4-4.4S9.6,1.6,12,1.6z"></path>
					</g>
				</svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	{l s='My Account' d='Shop.Theme.Actions'}
			   		</span>
		       </span>
			</a>
			<div id="user-info-1" class="collapse">
				<ul>	
					<li><a class="login" href="{$my_account_url}" title="{l s='Sign In' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Sign In' d='Shop.Theme.Actions'}</a></li>
					<li><a href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Register' d='Shop.Theme.CustomerAccount'} </a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-2">
		{if $logged} 
			<a href="#" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse" data-target="#user-info-2">      
				<i class="fa fa-user"></i>
				{$customerName}
		  	</a>
			<div id="user-info-2" class="collapse">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='My Account' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse" data-target="#user-info-2">
				<i class="fa fa-user"></i>
				{l s='My account' d='Shop.Theme.Actions'}
			</a>
			<div id="user-info-2" class="collapse">
				<ul>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$link->getPageLink('my-account', true)}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

