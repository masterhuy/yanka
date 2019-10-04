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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{foreach from=$rows item=row}
	<div class="jms-row{if isset($row->settings->custom_class) && $row->settings->custom_class} {$row->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" {if isset($row->settings->background_img) && $row->settings->background_img}style="{if isset($row->settings->background_img) && $row->settings->background_img}background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$row->settings->background_img|escape:'htmlall':'UTF-8'}');{/if}{if isset($row->settings->background_size) && $row->settings->background_size}background-size:{$row->settings->background_size|escape:'htmlall':'UTF-8'};{/if}{if isset($row->settings->background_attachment) && $row->settings->background_attachment}background-attachment:{$row->settings->background_attachment|escape:'htmlall':'UTF-8'};{/if}{if isset($row->settings->background_position) && $row->settings->background_position}background-position:{$row->settings->background_position|escape:'htmlall':'UTF-8'};{/if}"{/if}>
		{if isset($row->settings->fluid) && $row->settings->fluid == '0'}
			<div class="container">
		{else}
			<div class="container-fluid">
		{/if}
		<div class="row">
		{foreach from=$row->cols key=cindex item=column}
			<div class="{$column->className|escape:'htmlall':'UTF-8'}{if isset($column->settings->custom_class) && $column->settings->custom_class} {$column->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" style="{if isset($column->settings->background_img) && $column->settings->background_img}background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$column->settings->background_img|escape:'htmlall':'UTF-8'}');{/if}{if isset($column->settings->background_size) && $column->settings->background_size}background-size:{$column->settings->background_size|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_attachment) && $column->settings->background_attachment}background-attachment:{$column->settings->background_attachment|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_position) && $column->settings->background_position}background-position:{$column->settings->background_position|escape:'htmlall':'UTF-8'};{/if}">
				{foreach from=$column->addons key=aindex item=addon}
					<div class="addon-box">
						{if isset($addon->return_value) && $addon->return_value}{$addon->return_value nofilter}{/if}
					</div>
				{/foreach}
			</div>
		{/foreach}
		</div>
		</div>
	</div>
{/foreach}
<div class="back-to-top" id="back-to-top" title="Back to top">
	<i class="d-flex flex-center">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
			<g>
				<polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9"></polygon>
			</g>
		</svg>
	</i>
</div>
{if $settingpanel}
<div id="jmstools" class="jmsclose hidden-xs hidden-sm">
	<a id="jmstools-arrow" class="pull-right">
		<i class="conf">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none"> <path d="M13.1719 4.95312L14.7188 3.40625L12.5938 1.28125L11.0469 2.82813C10.8073 2.69271 10.5573 2.57292 10.2969 2.46875C10.0365 2.35417 9.77083 2.26562 9.5 2.20312V0H6.5V2.20312C6.22917 2.26562 5.96354 2.35417 5.70313 2.46875C5.44271 2.57292 5.19271 2.69271 4.95312 2.82813L3.40625 1.28125L1.28125 3.40625L2.82813 4.95312C2.69271 5.19271 2.56771 5.44271 2.45312 5.70313C2.34896 5.96354 2.26562 6.22917 2.20312 6.5H0V9.5H2.20312C2.26562 9.77083 2.34896 10.0365 2.45312 10.2969C2.56771 10.5573 2.69271 10.8073 2.82813 11.0469L1.28125 12.5938L3.40625 14.7188L4.95312 13.1719C5.19271 13.3073 5.44271 13.4323 5.70313 13.5469C5.96354 13.651 6.22917 13.7344 6.5 13.7969V16H9.5V13.7969C9.77083 13.7344 10.0365 13.651 10.2969 13.5469C10.5573 13.4323 10.8073 13.3073 11.0469 13.1719L12.5938 14.7188L14.7188 12.5938L13.1719 11.0469C13.3073 10.8073 13.4271 10.5573 13.5313 10.2969C13.6458 10.0365 13.7344 9.77083 13.7969 9.5H16V6.5H13.7969C13.7344 6.22917 13.6458 5.96354 13.5313 5.70313C13.4271 5.44271 13.3073 5.19271 13.1719 4.95312ZM8 10.5C7.3125 10.5 6.72396 10.2552 6.23438 9.76562C5.74479 9.27604 5.5 8.6875 5.5 8C5.5 7.3125 5.74479 6.72396 6.23438 6.23438C6.72396 5.74479 7.3125 5.5 8 5.5C8.6875 5.5 9.27604 5.74479 9.76562 6.23438C10.2552 6.72396 10.5 7.3125 10.5 8C10.5 8.6875 10.2552 9.27604 9.76562 9.76562C9.27604 10.2552 8.6875 10.5 8 10.5Z" fill="white"></path> </svg>
		</i>
		<i class="conf-close">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.4343 0.434315L0.434315 14.4343L1.56569 15.5657L15.5657 1.56569L14.4343 0.434315ZM0.434315 1.56569L14.4343 15.5657L15.5657 14.4343L1.56569 0.434315L0.434315 1.56569Z" fill="currentColor"></path> </svg>
		</i>
	</a>
	<div id="setting-overlay"></div>
	<div id="jmstools-content" class="pull-left">
		<form action="index.php" method="POST">
			{if $themeskins|@count > 0}
			<div class="form-group">
				<label class="form-label">Theme Skin</label>
					<a class="skin-box {if $jpb_skin=='default' || $jpb_skin==''}active{/if}" title="Default">
					<img src="themes/{$themename|escape:'htmlall':'UTF-8'}/skin-icons/default.png" alt="Default" />
					</a>
				{foreach from=$themeskins item=sk}
					<a class="skin-box {if $jpb_skin=={$sk}}active{/if}" title="{$sk|escape:'htmlall':'UTF-8'}" data-color="{$sk|escape:'htmlall':'UTF-8'}">
					<img src="themes/{$themename|escape:'htmlall':'UTF-8'}/skin-icons/{$sk|escape:'htmlall':'UTF-8'}.png" alt="{$sk|escape:'htmlall':'UTF-8'}" />
					</a>					
				{/foreach}
			</div>
			{/if}	
			{if isset($homepages) && $homepages|@count > 1}
			<div class="form-group">
					<label>Home Page</label>
					<select name="jpb_homepage" id="jmshomepage">
					{foreach from=$homepages item=hp}
						<option value="{$hp.id_homepage|escape:'htmlall':'UTF-8'}" {if $jpb_homepage=={$hp.id_homepage|escape:'htmlall':'UTF-8'}}selected="selected"{/if}>{$hp.title|escape:'htmlall':'UTF-8'}</option>					
					{/foreach}	
					</select>
			</div>
			{/if}			
			{if isset($producthovers)}
			<div class="form-group">
					<label>Product Box Hover</label>
					<select name="jpb_phover" id="jmsphover">
					{foreach from=$producthovers item=ph key=phkey}
						<option value="{$phkey|escape:'htmlall':'UTF-8'}" {if $jpb_phover=={$phkey|escape:'htmlall':'UTF-8'}}selected="selected"{/if}>{$ph|escape:'htmlall':'UTF-8'}</option>					
					{/foreach}	
					</select>
			</div>
			{/if}		
			<div class="form-group">		
				<label>Product Box Color Pick</label>	
				<select name="jpb_pcolor">
					<option value="1" {if $jpb_pcolor=='1'}selected="selected"{/if}>Show</option>										
					<option value="0" {if $jpb_pcolor=='0'}selected="selected"{/if}>Hide</option>										
				</select>				
			</div>
			<div class="form-group">		
				<label>Direction</label>	
				<select name="jpb_rtl">
					<option value="0" {if $jpb_rtl=='0'}selected="selected"{/if}>LTR</option>										
					<option value="1" {if $jpb_rtl=='1'}selected="selected"{/if}>RTL</option>										
				</select>				
			</div>
			<input id="jmsskin" type="hidden" name="jpb_skin" value="{$jpb_skin|escape:'htmlall':'UTF-8'}" />
			
			<div class="form-group btn-action">
				<button type="submit" class="btn-default" name="apply" value="1">Apply</button>
				<a class="btn-default" href="index.php?settingreset=1">Reset</a>
			</div>
			<input type="hidden" name="settingpanel" value="1" />
		</form>	
	</div>
</div>
{/if}


