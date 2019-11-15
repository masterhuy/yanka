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
{extends file='page.tpl'}
{block name='page_content_container'}
<div id="mywishlist" class="addon-title">
    {capture name=path}
        <a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='My account' d='Shop.Theme'}</a>
        <span class="navigation-pipe">{$navigationPipe}</span>
        <a href="{$link->getModuleLink('jmswishlist', 'mywishlist')|escape:'html'}">{l s='My wishlists' d='Shop.Theme'}</a>
		{if isset($current_wishlist)}
	        <span class="navigation-pipe">{$navigationPipe}</span>
	        {$current_wishlist.name}
		{/if}
    {/capture}

	<h3>{l s='My wishlists' d='Shop.Theme'}</h3>

	{include file='_partials/form-errors.tpl' errors=$errors}
	{if $id_customer|intval neq 0}
		<form method="post" class="std" id="form_wishlist">
			<fieldset>
				
				<p class="text">
					<input type="hidden" name="token" value="{$token|escape:'html':'UTF-8'}" />
					<label class="align_right" for="name">{l s='Name' d='Shop.Theme'}</label>
					<input type="text" id="name" name="name" class="inputTxt" value="{if isset($smarty.post.name) and $errors|@count > 0}{$smarty.post.name|escape:'html':'UTF-8'}{/if}" />
				</p>
				<p class="submit">
					<button type="submit" name="submitWishlist" id="submitWishlist" class="btn-default" value="{l s='Save' d='Shop.Theme'}" class="exclusive" />{l s='Save' d='Shop.Theme'}</button>
				</p>
			</fieldset>
		</form>
		{if $wishlists}
		<div id="block-history" class="block-center">
			<table class="std">
				<thead>
					<tr>
						<th class="first_item">{l s='Name' d='Shop.Theme'}</th>
						<th class="item mywishlist_first">{l s='Qty' d='Shop.Theme'}</th>
						<th class="item mywishlist_first">{l s='Viewed' d='Shop.Theme'}</th>
						<th class="item mywishlist_second">{l s='Created' d='Shop.Theme'}</th>
						<th class="item mywishlist_second">{l s='Direct Link' d='Shop.Theme'}</th>
						<th class="item mywishlist_second">{l s='Default' d='Shop.Theme'}</th>
						<th class="last_item mywishlist_first">{l s='Delete' d='Shop.Theme'}</th>
					</tr>
				</thead>
				<tbody>
				{section name=i loop=$wishlists}
					<tr id="wishlist_{$wishlists[i].id_wishlist|intval}">
						<td style="width:200px;">
							<a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">{$wishlists[i].name|truncate:30:'...'|escape:'html':'UTF-8'}</a>
						</td>
						<td class="bold align_center">
							{assign var=n value=0}
							{foreach from=$nbProducts item=nb name=i}
								{if $nb.id_wishlist eq $wishlists[i].id_wishlist}
									{assign var=n value=$nb.nbProducts|intval}
								{/if}
							{/foreach}
							{if $n}
								{$n|intval}
							{else}
								0
							{/if}
						</td>
						<td>{$wishlists[i].counter|intval}</td>
						<td>{$wishlists[i].date_add|date_format:"%Y-%m-%d"}</td>
						<td><a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">{l s='View' d='Shop.Theme'}</a></td>
						<td class="wishlist_default">
							{if isset($wishlists[i].default) && $wishlists[i].default == 1}
								<p class="is_wish_list_default">
									{* <i class="la la-check-square"></i> *}
									<img src="themes/jms_yanka/assets/img/icon/checked.png">
								</p>
							{else}
								<a href="#" onclick="javascript:event.preventDefault();(WishlistDefault('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}'));">
									{* <i class="la la-square-o"></i> *}
									<img src="themes/jms_yanka/assets/img/icon/uncheck.png">
								</a>
							{/if}
						</td>
						<td class="wishlist_delete">
							<a class="icon" href="#" onclick="javascript:event.preventDefault();return (WishlistDelete('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}', '{l s='Do you really want to delete this wishlist ?' mod='blockwishlist' js=1}'));">
								<i>
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
										<g>
											<path fill="currentColor" d="M5,24h14l1-17H4L5,24z M18.3,8.6l-0.8,13.8h-11L5.7,8.6H18.3z"></path>
											<rect x="2" y="3.2" fill="currentColor" width="20" height="1.6"></rect>
											<rect x="10" y="0.2" fill="currentColor" width="4" height="1.6"></rect>
										</g>
									</svg>
								</i>
							</a>
						</td>
					</tr>
				{/section}
				</tbody>
			</table>
		</div>
		<div id="block-order-detail">&nbsp;</div>
		{/if}
	{/if}

	<ul class="footer_links">
		<li><a href="{$link->getPageLink('my-account', true)}"></a><a class="btn-default" href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Back to Your Account' d='Shop.Theme'}</a></li>
		<li class="f_right"><a href="#"></a><a href="{$urls.pages.index}" class="btn-default">{l s='Home' d='Shop.Theme'}</a></li>
	</ul>
</div>
{/block}