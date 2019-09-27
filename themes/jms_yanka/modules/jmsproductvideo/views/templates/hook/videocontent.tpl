{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<style>
	.jms-popup-wrap {
		width : {$video_width}px;
		height : {$video_height}px;				
	}
</style>

{if $product_videos}
<div class="jms-videos" id="jmsproductvideo">
	{foreach $product_videos as $video}	
		<div class="jms-video {if $video_show == '1'}popup-active{/if}">
			<div class="addon-title">
				<h3>
					<p>{$video.title}</p>
					<i class="d-i-flex align-items-center">
						<svg aria-hidden="true" focusable="false"
							role="presentation" class="icon icon-theme-211"
							viewBox="0 0 24 24">
							<path fill="#231F20"
								d="M12.148 20.18h-.007a105.39 105.39 0 0 1-2.503-.059 53.952 53.952 0 0 1-2.318-.138 26.318 26.318 0 0 1-2.314-.28c-.985-.196-1.738-.611-2.255-1.236-.499-.603-.819-1.361-.95-2.253-.109-.844-.175-2.174-.201-4.076.026-1.917.092-3.248.2-4.083.133-.901.453-1.66.952-2.262.517-.625 1.27-1.04 2.24-1.234a26.488 26.488 0 0 1 2.33-.282 57.503 57.503 0 0 1 2.318-.138 117.44 117.44 0 0 1 2.503-.059c.97.013 1.805.033 2.518.059.717.027 1.49.073 2.318.138.836.067 1.614.161 2.314.279.985.197 1.739.612 2.256 1.237.499.604.819 1.361.95 2.253.109.845.174 2.175.201 4.076-.027 1.917-.092 3.248-.2 4.082-.133.901-.453 1.659-.952 2.263-.518.625-1.271 1.04-2.24 1.234-.721.123-1.5.216-2.33.282-.829.066-1.602.112-2.318.138-.713.026-1.548.046-2.503.059h-.009zm-.007-15.001c-.931.013-1.756.033-2.462.059-.703.026-1.46.071-2.272.135-.804.064-1.55.154-2.217.267-.71.143-1.236.423-1.592.854-.369.446-.608 1.022-.71 1.712-.1.772-.164 2.098-.189 3.932.025 1.818.09 3.145.191 3.925.101.681.339 1.257.708 1.703.357.432.882.711 1.607.856.657.111 1.403.202 2.202.265.812.065 1.569.11 2.271.135.704.026 1.527.046 2.47.059.942-.013 1.766-.032 2.47-.059.703-.025 1.46-.07 2.271-.135a24.923 24.923 0 0 0 2.217-.268c.709-.142 1.235-.422 1.592-.853.369-.447.608-1.022.71-1.712.099-.771.164-2.098.189-3.932-.026-1.818-.09-3.144-.191-3.926-.101-.68-.339-1.256-.708-1.702-.356-.431-.883-.711-1.608-.856a25.66 25.66 0 0 0-2.202-.264 54.865 54.865 0 0 0-2.271-.135c-.705-.027-1.531-.046-2.476-.06zM9.099 16.851V7.408l7.869 4.721-7.869 4.722zm1.099-7.5v5.558l4.631-2.779-4.631-2.779z"></path>
						</svg>
						<span>{l s='Watch video' d='Shop.Theme.Global'}</span>
					</i>
				</h3>
			</div>
			{if $video_show == '1'}
				<div class="jms-popup-box">				
					<div class="jms-popup-wrap">						
						<a class="popup_close"><i class="fa fa-close"></i></a>
						{foreach $video.links as $video_link}
							{if $video_link|strpos:'youtube' !== false}
							<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video_link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
							{else}
							{assign var=count_ value = ("/"|explode:$video_link)}
								<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							{/if}
						{/foreach}			
					</div>
					<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
				</div>	
			{else}			
				{foreach $video.links as $video_link}				
					{if $video_link|strpos:'youtube' !== false}
						<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video.link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
					{else}
						{assign var=count_ value = ("/"|explode:$video_link)}
						<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					{/if}
				{/foreach}		
			{/if}
		</div>
	{/foreach}
</div>
{/if}