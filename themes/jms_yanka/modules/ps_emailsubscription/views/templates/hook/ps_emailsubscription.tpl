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
			<h3>{l s='Newsletter subscription' d='Shop.Theme.Global'}</h3>
			<span>{l s='Sign up for Shella updates to receive information about new arrivals, future events and specials.' d='Shop.Theme.Global'}</span>
		</div>
		<div class="news_content">
        	<div  class="block_c_right">
				<form action="{$urls.pages.index}#footer" method="post">
					<div class="form-group{if isset($msg) && $msg} {if $nw_error}form-error{else}form-ok{/if}{/if}" >
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Enter Your Email Address' d='Shop.Forms.Labels'}" />
						<button type="submit" name="submitNewsletter" class="btn-default">
							{l s='SUBSCRIBE!' d='Shop.Theme.Global'}
						</button>
						<button type="submit" name="submitNewsletter" class="btn-default active">
							{l s='SUBSCRIBE!' d='Shop.Theme.Global'}
						</button>
						<input type="hidden" name="action" value="0" />
					</div>
					{if $msg}
			    		<div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
			        		{$msg}
			   			</div>
					{/if}
				</form>
			</div>
      	</div>
	</div>
</div>





