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
<div class="addon-social">
    {if $addon_title}
        <div class="addon-title">
            <h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
        </div>
    {/if}
    {if $addon_desc}
        <p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
    {/if}
    <div id="social_block" class="type-2">
    	<ul class="find-us">
           	{if $facebook_url != ''}
           		<li class="divider">
    		       	<a href="{$facebook_url|escape:'html':'UTF-8'}" class="social-icon facebook">
    		       		<span class="fa fa-facebook"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Facebook</span>
                        </span>
    		       	</a>
           	{/if}
            {if $twitter_url != ''}
            	<li class="divider">
            		<a href="{$twitter_url|escape:'html':'UTF-8'}" class="social-icon twitter">
            			<span class="fa fa-twitter"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Twitter</span>
                        </span>
            		</a>
            {/if}
            {if $google_plus_url != ''}
                <li class="divider">
                    <a href="{$google_plus_url|escape:'html':'UTF-8'}" class="social-icon gplus">
                        <span class="fa fa-google"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Google</span>
                        </span>
                    </a>
            {/if}
            {if $instagram_url != ''}
                <li class="divider">
                    <a href="{$instagram_url|escape:'html':'UTF-8'}" class="social-icon instagram">
                        <span class="fa fa-instagram"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Instagram</span>
                        </span>
                    </a>
            {/if}
            {if $pinterest_url != ''}
                <li class="divider">
                    <a href="{$pinterest_url|escape:'html':'UTF-8'}" class="social-icon pinterest">
                        <span class="fa fa-pinterest"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Pinterest</span>
                        </span>
                    </a>
            {/if}  
            {if $youtube_url != ''}
                <li class="divider">
                    <a href="{$youtube_url|escape:'html':'UTF-8'}" class="social-icon youtube">
                        <span class="fa fa-youtube"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Youtube</span>
                        </span>
                    </a>
            {/if}
            {if $linkedin_url != ''}
            	<li class="divider">
            		<a href="{$linkedin_url|escape:'html':'UTF-8'}" class="social-icon linkedin">
            			<span class="fa fa-linkedin"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Linkedin</span>
                        </span>
            		</a>
            {/if}        
      </ul>
    </div>
</div>
