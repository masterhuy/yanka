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
<!-- Block languages module -->
{if count($languages) > 1}
	<div class="btn-group compact-hidden languages-info type-1">
		<a href="#" class="btn-xs dropdown-toggle" data-toggle="dropdown">
			{$current_language.name_simple|truncate:3:''} 
			<i>
	            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
					<g>
						<polygon fill="currentColor" points="12.5,17.6 2.9,8.1 4.1,6.9 12.5,15.4 20.9,6.9 22.1,8.1 	"></polygon>
					</g>
				</svg>
	        </i>
			<span class="tooltip-wrap bottom">
				<span class="tooltip-text">
					{l s='Language' d='Shop.Theme.Actions'}
				</span>
			</span>
		</a>
		<div class="dropdown-menu">
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
							{$language.name_simple}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	</div>

	<div class="btn-group compact-hidden languages-info type-2">
		<p class="">{l s='Select Language' d='Shop.Theme.Actions'}</p>
		<a href="#" class="btn-xs dropdown-toggle" data-toggle="dropdown">
			{$current_language.name_simple|truncate:3:''} <i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
		<div class="dropdown-menu">
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
							<img class="flag" alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$language.id_lang}.jpg" width="16" height="11"/>
							{$language.name_simple}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	</div>

	<div class="btn-group compact-hidden languages-info type-3">
		<label>{l s='Languages' d='Shop.Theme.Actions'}</label>
		<ul class="languages-list">
			{foreach from=$languages key=k item=language name="languages"}
				<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
					<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
						{$language.name_simple|truncate:3:''}
					</a>
				</li>
			{/foreach}		
		</ul>
	</div>
{/if}
<!-- /Block languages module -->



