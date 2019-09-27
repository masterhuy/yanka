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
<div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">	
		{if $popup_title}
		<h2>
			{$popup_title|escape:'htmlall':'UTF-8'}
		</h2>
		{/if}
		<a class="popup-close">
			<i class="popup-navigation__close cursor-pointer" data-js-popup-close
				data-button-content="close">
				<svg aria-hidden="true" focusable="false" role="presentation"
						class="icon icon-theme-164" viewBox="0 0 24 24">
					<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"/>
				</svg>
			</i>
		</a>
		<div class="jms-popup-content">
			<i class="d-flex flex-center">
				<svg aria-hidden="true" focusable="false" role="presentation"
					class="icon icon-theme-153" viewBox="0 0 24 24">
					<path d="M22.072 4.807c.013.026.02.049.02.068v.068c.013.026.02.046.02.059v13.75c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186H2.736a.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V5.002c0-.013.006-.032.02-.059v-.068c0-.019.006-.042.02-.068a.125.125 0 0 0 .029-.049.444.444 0 0 1 .029-.068.145.145 0 0 0 .02-.059c.013 0 .022-.003.029-.01a.04.04 0 0 0 .01-.029l.038-.039a.214.214 0 0 1 .059-.039l.039-.039c.013-.013.032-.02.059-.02a.125.125 0 0 1 .049-.029.184.184 0 0 1 .049-.01c.026-.013.049-.02.068-.02s.042-.006.068-.02H21.525c.026.014.049.02.068.02s.042.007.068.02c.013 0 .029.004.049.01.02.007.036.017.049.029.026 0 .045.007.059.02l.039.039a.286.286 0 0 1 .059.039l.039.039c0 .014.003.023.01.029.006.007.016.01.029.01 0 .014.006.033.02.059a.587.587 0 0 0 .039.068.102.102 0 0 1 .019.049zm-1.211 13.32V6.232l-8.379 6.152a.57.57 0 0 1-.176.088.659.659 0 0 1-.566-.088L3.361 6.232v11.895h17.5zM4.65 5.627l7.461 5.469 7.461-5.469H4.65z"/>
				</svg>
			</i>
			{$popup_content nofilter}

			<div class="dontshow">
				<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
				<label>{l s="Don't show this popup again" d='Shop.Theme.Global'}</label>
			</div>		
			<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
			<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
			<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
		</div>	
	</div>
</div>