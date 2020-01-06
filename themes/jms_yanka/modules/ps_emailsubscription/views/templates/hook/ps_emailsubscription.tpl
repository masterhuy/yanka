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
<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="addon-title">
			<h3>{l s='Subscribe to Our Newsletter!' d='Shop.Theme.Global'}</h3>
		</div>
		<div class="addon-title popup">
			<span class="desc">{l s='Be the first to learn about our latest trends and get exclusive offers.' d='Shop.Theme.Global'}</span>
		</div>
		<div class="news_content">
        	<div class="block_c_right">
				<form action="{$urls.pages.index}#footer" method="post">
					<div class="form-group{if isset($msg) && $msg} {if $nw_error}form-error{else}form-ok{/if}{/if}" >
						<input class="inputNew form-control grey newsletter-input" type="text" required name="email" size="18" value="{$value}" placeholder="{l s='Your email address' d='Shop.Forms.Labels'}" />
						<button type="submit" name="submitNewsletter">
							<span class="pt-icon">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
									<path fill="currentColor" d="M0,4v16h24V4H0z M21,5.6L12,12L3,5.6H21z M1.6,18.4V6.6L12,14l10.4-7.4v11.8H1.6z"></path>
								</svg>
							</span>
						</button>
						<button class="btn-default" type="submit" name="submitNewsletter">
							{l s='Subscribe!' d='Shop.Theme.Global'}
						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				{if $msg}
					<div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
						{$msg}
					</div>
				{/if}
			</div>
      	</div>
		<p>{l s='By entering your email, you agree to our Terms of Service and Privacy Policy.' d='Shop.Theme.Global'}</p>
	</div>
</div>





