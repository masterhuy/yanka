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

<script type="text/javascript">
	var testi_items = 3,
	    testi_itemsDesktop = {if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsDesktopSmall = {if $items_show_md}{$items_show_md|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsTablet = {if $items_show_sm}{$items_show_sm|escape:'htmlall':'UTF-8'}{else}1{/if},
	    testi_itemsMobile = {if $items_show_xs}{$items_show_xs|escape:'htmlall':'UTF-8'}{else}1{/if};
		var p_nav_testi = {if $navigation == 1}true{else}false{/if};
	    var p_pag_testi = {if $pagination == 1}true{else}false{/if};
		var auto_play_testi = {if $autoplay == 1}true{else}false{/if};
	
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
	<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}	

<div id="testimonial">
	<div class="testimonial_box">
		<div class="testimonial-carousel">
			{foreach from = $testimonials_slides item = testimonials_slide}
				<div class="item">
					{foreach from = $testimonials_slide item = testimonial}
						<div class="testimonial-box">
						<div class="testimonial-info">
							<div class="testimonial-comment" >
								{$testimonial.comment|escape:'html':'UTF-8'}
							</div>
							{if $show_time}
								<div class="testimonial-date">
									{$testimonial.posttime|date_format:"%b %e, %Y"|escape:'html':'UTF-8'}
								</div>
							{/if}
						</div>
						<div class="testimonial-img">
							{if $show_image}
								<img class="img-responsive" src="{$image_url|escape:'html':'UTF-8'}resized_{$testimonial.image|escape:'html':'UTF-8'}" alt="{$testimonial.author|escape:'html':'UTF-8'}" />
							{/if}
							<div class="info_people">
								<div class="testimonial-author">
									{$testimonial.author|escape:'html':'UTF-8'}
								</div>
								{if $show_office}
									<span class="show_office">
										{$testimonial.office|escape:'html':'UTF-8'}
									</span>
								{/if}
							</div>
							<div class="id_testimonial">#{$testimonial.id_testimonial|escape:'html':'UTF-8'}</div>
							
						</div>
					</div>
					{/foreach}
				</div>
			{/foreach}
		</div>
	</div>
</div>

