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
			<a href="#" class="account dropdown-toggle p-relative" data-toggle="dropdown">      
				<svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-201" viewBox="0 0 24 24">
                    <path d="M4.023 22.167h-1.25v-.625c0-1.042.163-2.034.488-2.979a9.524 9.524 0 0 1 1.357-2.588 9.366 9.366 0 0 1 2.061-2.031 9.58 9.58 0 0 1 2.598-1.328 5.588 5.588 0 0 1-1.992-2.002 5.413 5.413 0 0 1-.762-2.822c0-.781.146-1.51.439-2.188A5.707 5.707 0 0 1 9.96 2.606c.677-.293 1.406-.439 2.188-.439s1.51.146 2.188.439a5.724 5.724 0 0 1 2.998 2.998c.293.677.439 1.406.439 2.188 0 1.029-.254 1.97-.762 2.822a5.588 5.588 0 0 1-1.992 2.002 9.623 9.623 0 0 1 2.598 1.328 9.41 9.41 0 0 1 3.418 4.619c.325.944.488 1.937.488 2.979v.625h-1.25v-.625c0-1.12-.212-2.174-.635-3.164A8.172 8.172 0 0 0 17.9 15.79a8.172 8.172 0 0 0-2.588-1.738 7.966 7.966 0 0 0-3.164-.635c-1.12 0-2.175.212-3.164.635a8.15 8.15 0 0 0-2.588 1.738 8.155 8.155 0 0 0-1.738 2.588 7.966 7.966 0 0 0-.635 3.164v.625zM8.115 9.491a4.364 4.364 0 0 0 2.334 2.334 4.28 4.28 0 0 0 1.699.342 4.375 4.375 0 0 0 4.033-2.676 4.28 4.28 0 0 0 .342-1.699 4.28 4.28 0 0 0-.342-1.699 4.392 4.392 0 0 0-.938-1.396 4.4 4.4 0 0 0-1.396-.937 4.284 4.284 0 0 0-1.699-.342c-.599 0-1.166.114-1.699.342-.534.228-1 .541-1.396.937-.397.397-.71.863-.938 1.396a4.28 4.28 0 0 0-.342 1.699c0 .599.114 1.165.342 1.699z"/>
                </svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	{l s='Account' d='Shop.Theme.Actions'}
			   		</span>
		       </span>
		  	</a>
			<div id="login-1" class="collapse dropdown-menu">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}">{$customerName}</a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#" class="account dropdown-toggle p-relative" data-toggle="dropdown">
				<svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-201" viewBox="0 0 24 24">
                    <path d="M4.023 22.167h-1.25v-.625c0-1.042.163-2.034.488-2.979a9.524 9.524 0 0 1 1.357-2.588 9.366 9.366 0 0 1 2.061-2.031 9.58 9.58 0 0 1 2.598-1.328 5.588 5.588 0 0 1-1.992-2.002 5.413 5.413 0 0 1-.762-2.822c0-.781.146-1.51.439-2.188A5.707 5.707 0 0 1 9.96 2.606c.677-.293 1.406-.439 2.188-.439s1.51.146 2.188.439a5.724 5.724 0 0 1 2.998 2.998c.293.677.439 1.406.439 2.188 0 1.029-.254 1.97-.762 2.822a5.588 5.588 0 0 1-1.992 2.002 9.623 9.623 0 0 1 2.598 1.328 9.41 9.41 0 0 1 3.418 4.619c.325.944.488 1.937.488 2.979v.625h-1.25v-.625c0-1.12-.212-2.174-.635-3.164A8.172 8.172 0 0 0 17.9 15.79a8.172 8.172 0 0 0-2.588-1.738 7.966 7.966 0 0 0-3.164-.635c-1.12 0-2.175.212-3.164.635a8.15 8.15 0 0 0-2.588 1.738 8.155 8.155 0 0 0-1.738 2.588 7.966 7.966 0 0 0-.635 3.164v.625zM8.115 9.491a4.364 4.364 0 0 0 2.334 2.334 4.28 4.28 0 0 0 1.699.342 4.375 4.375 0 0 0 4.033-2.676 4.28 4.28 0 0 0 .342-1.699 4.28 4.28 0 0 0-.342-1.699 4.392 4.392 0 0 0-.938-1.396 4.4 4.4 0 0 0-1.396-.937 4.284 4.284 0 0 0-1.699-.342c-.599 0-1.166.114-1.699.342-.534.228-1 .541-1.396.937-.397.397-.71.863-.938 1.396a4.28 4.28 0 0 0-.342 1.699c0 .599.114 1.165.342 1.699z"/>
                </svg>
                <span class="tooltip-wrap bottom">
			       	<span class="tooltip-text">
			      	 	{l s='Account' d='Shop.Theme.Actions'}
			   		</span>
		       </span>
			</a>
			<div id="login" class="collapse dropdown-menu">
				<ul>
					<li><a href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Register' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a class="login" href="{$my_account_url}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-2">
		{if $logged} 
			<a href="#" class="account dropdown-toggle" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="dropdown">      
				<i class="fa fa-user"></i>
				{$customerName}
		  	</a>
			<div id="login-2" class="collapse dropdown-menu">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='My Account' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#" class="account dropdown-toggle" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="dropdown">
				<i class="fa fa-user"></i>
				{l s='My account' d='Shop.Theme.Actions'}
			</a>
			<div id="login-2" class="collapse dropdown-menu">
				<ul>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$link->getPageLink('my-account', true)}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

