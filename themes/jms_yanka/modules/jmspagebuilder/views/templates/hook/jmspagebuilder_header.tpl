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
{if $settingpanel}
<div id="jmstools" class="jmsclose hidden-xs hidden-sm">
	<a id="jmstools-arrow" class="pull-right">
		<i class="d-flex cog">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-301"
					viewBox="0 0 24 18">
				<path d="M13.065 5.949L12.27 5.8c-.868-.183-1.23-1.181-.669-1.839l.526-.587c.435-.497.37-1.183-.132-1.546l-.874-.71C10.6.7 9.884.761 9.503 1.241l-.525.587c-.562.657-1.688.442-1.975-.346L6.735.747C6.525.17 5.858-.139 5.254.061l-1.1.365c-.605.201-.928.838-.717 1.416l.248.683c.287.788-.456 1.624-1.324 1.44l-.774-.095c-.665-.133-1.248.296-1.351.86L.01 5.806c-.084.617.31 1.192.92 1.343l.794.15c.849.13 1.23 1.18.65 1.786l-.526.587c-.435.497-.37 1.183.131 1.546l.875.71c.521.417 1.238.355 1.619-.124l.545-.534c.561-.658 1.687-.443 1.974.346l.268.735c.21.578.877.887 1.482.686l1.1-.365c.604-.2.927-.838.716-1.416l-.248-.683c-.287-.788.457-1.624 1.324-1.44l.794.148c.664.133 1.248-.296 1.35-.86l.225-1.076c.065-.67-.33-1.245-.94-1.396zM7.763 8.651c-1.21.401-2.543-.216-2.964-1.372-.42-1.156.225-2.43 1.434-2.832 1.21-.401 2.544.216 2.964 1.372.42 1.156-.225 2.43-1.434 2.832z"
						fill="#fff"/>
				<path d="M23.184 11.825l-.681-.132c-.746-.16-1.06-1.026-.58-1.593l.45-.507c.371-.43.313-1.023-.118-1.339l-.753-.618c-.449-.361-1.064-.31-1.389.104l-.45.506c-.48.568-1.446.378-1.695-.305l-.232-.637c-.182-.501-.755-.77-1.274-.598l-.942.313a.95.95 0 0 0-.611 1.223l.215.592c.249.683-.386 1.405-1.132 1.244l-.665-.086c-.57-.117-1.07.253-1.156.741l-.19.93a1.06 1.06 0 0 0 .794 1.166l.682.131c.728.116 1.06 1.027.563 1.549l-.45.506c-.371.43-.314 1.023.118 1.34l.753.617c.449.361 1.064.31 1.388-.104l.467-.46c.48-.568 1.446-.379 1.695.304l.232.638c.182.501.756.77 1.274.598l.942-.313a.95.95 0 0 0 .611-1.223l-.215-.592c-.248-.684.387-1.405 1.132-1.244l.682.131c.57.117 1.07-.253 1.156-.74l.19-.931c.053-.58-.287-1.08-.81-1.211zm-4.542 2.324c-1.036.344-2.183-.195-2.547-1.196-.365-1.002.185-2.104 1.222-2.448 1.037-.344 2.183.194 2.548 1.196.364 1.002-.186 2.103-1.223 2.447z"
						fill="#fff"/>
			</svg>
		</i>
		<i class="d-flex close-cog">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-164"
					viewBox="0 0 24 24">
				<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"/>
			</svg>
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
				<button type="submit" class="btn-default active" name="apply" value="1">Apply</button>
				<a class="btn-default active" href="index.php?settingreset=1">Reset</a>
			</div>
			<input type="hidden" name="settingpanel" value="1" />
		</form>	
	</div>
</div>
{/if}