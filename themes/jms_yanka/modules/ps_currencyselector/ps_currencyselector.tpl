{*
* 2007-2018 PrestaShop
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
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type-1">
   	<a href="#" class="title btn-xs dropdown-toggle" data-toggle="dropdown">
		{$current_currency.iso_code} 
		<i>
            <svg aria-hidden="true" focusable="false" role="presentation"
                class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i>
	</a>
	<div id="currency-1" class="collapse dropdown-menu">
		<ul>
			{foreach from=$currencies item=currency}
				<li {if $currency.current} class="current" {/if}>
					<a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="collapse-item">
						<b>{$currency.sign}</b> {$currency.iso_code}
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div>
<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type-2">
	<p class="">{l s='Select Currency' d='Shop.Theme.Actions'}</p>
   	<a href="#" class="title btn-xs dropdown-toggle" data-toggle="dropdown">
		{$current_currency.iso_code} <i class="fa fa-angle-down" aria-hidden="true"></i>
	</a>
	<div id="currency-2" class="collapse dropdown-menu">
		<ul>
			{foreach from=$currencies item=currency}
				<li {if $currency.current} class="current" {/if}>
					<a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="collapse-item">
						<b>{$currency.sign}</b> {$currency.iso_code}
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div>
<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info type-3">
	<ul>
      	{foreach from=$currencies item=currency}
	        <li {if $currency.current} class="current" {/if}>
	          	<a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code} {$currency.sign}</a>
	        </li>
      	{/foreach}
	</ul>
</div>

