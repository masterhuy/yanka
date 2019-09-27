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
	<div class="jms-row{if isset($row->settings->custom_class) && $row->settings->custom_class} {$row->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" 
		{if isset($row->settings->background_img) && $row->settings->background_img}style="
		{if isset($row->settings->background_img) && 
			$row->settings->background_img}background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$row->settings->background_img|escape:'htmlall':'UTF-8'}');
		{/if}
		{if isset($row->settings->background_size) && $row->settings->background_size}background-size:{$row->settings->background_size|escape:'htmlall':'UTF-8'};
		{/if}
		{if isset($row->settings->background_attachment) && $row->settings->background_attachment}background-attachment:{$row->settings->background_attachment|escape:'htmlall':'UTF-8'};
		{/if}
		{if isset($row->settings->background_repeat) && $row->settings->background_repeat}background-repeat:{$row->settings->background_repeat|escape:'htmlall':'UTF-8'};
		{/if}
		{if isset($row->settings->background_position) && $row->settings->background_position}background-position:{$row->settings->background_position|escape:'htmlall':'UTF-8'};
		{/if}"
		{/if}>
		{if isset($row->settings->fluid) && $row->settings->fluid == '0'}
			<div class="container">
		{else}
			<div class="container-fluid">
		{/if}
		<div class="row">
		{foreach from=$row->cols key=cindex item=column}
			<div class="{$column->className|escape:'htmlall':'UTF-8'}{if isset($column->settings->custom_class) && $column->settings->custom_class} {$column->settings->custom_class|escape:'htmlall':'UTF-8'}{/if}" style="
			{if isset($column->settings->background_img) && $column->settings->background_img}
				background-image:url('{$root_url|escape:'htmlall':'UTF-8'}{$column->settings->background_img|escape:'htmlall':'UTF-8'}');
			{/if}
			{if isset($row->settings->background_repeat) && $row->settings->background_repeat}
				background-repeat:{$row->settings->background_repeat|escape:'htmlall':'UTF-8'};
			{/if}
			{if isset($column->settings->background_size) && $column->settings->background_size}background-size:{$column->settings->background_size|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_attachment) && $column->settings->background_attachment}background-attachment:{$column->settings->background_attachment|escape:'htmlall':'UTF-8'};{/if}{if isset($column->settings->background_position) && $column->settings->background_position}background-position:{$column->settings->background_position|escape:'htmlall':'UTF-8'};{/if}">
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
		<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-014"
				viewBox="0 0 24 24">
			<path d="M11.791 21.505a.598.598 0 0 1-.439-.186.601.601 0 0 1-.186-.439V4.883l-4.551 4.57a.649.649 0 0 1-.449.177.652.652 0 0 1-.449-.176.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l5.625-5.625a2.48 2.48 0 0 1 .107-.068c.032-.02.068-.042.107-.068a.736.736 0 0 1 .468 0c.039.026.075.049.107.068.032.02.068.042.107.068l5.625 5.625c.117.13.176.28.176.449a.652.652 0 0 1-.176.449.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127l-4.551-4.57V20.88a.6.6 0 0 1-.186.439.59.59 0 0 1-.437.186z"/>
		</svg>
	</i>
</div>

