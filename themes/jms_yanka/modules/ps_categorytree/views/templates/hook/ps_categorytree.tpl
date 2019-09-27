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
{function name="categories" nodes=[] depth=0}
    {strip}
        {if $nodes|count}
            <ul class="category-sub-menu collapse in" id="category-sub-menu">
                {foreach from=$nodes item=node}
                <li data-depth="{$depth}" class="cat-item">
                    {if $depth===0}
                        <a href="{$node.link}">
                            {$node.name}
                        </a>
                        {if $node.children}
                            <span class="navbar-toggler collapse-icons collapsed" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                                <i class="d-i-flex">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                            class="icon icon-theme-229" viewBox="0 0 24 24">
                                        <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                                    </svg>
                                </i>
                            </span>
                        {/if}
                        {if $node.children}
                            <div class="sub-list collapse" id="exCollapsingNavbar{$node.id}">
                                {categories nodes=$node.children depth=$depth+1}
                            </div>
                        {/if}
                    {else}
                        <a class="category-sub-link" href="{$node.link}">{$node.name}
                            {if $node.children}
                                <span class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                                    <i class="d-i-flex">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-229" viewBox="0 0 24 24">
                                            <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                                        </svg>
                                    </i>
                                </span>
                            {/if}
                        </a>	
                        {if $node.children}
                            <div class="collapse" id="exCollapsingNavbar{$node.id}">
                            {categories nodes=$node.children depth=$depth+1}
                            </div>
                        {/if}
                    {/if}
                </li>
                {/foreach}
            </ul>
        {/if}
    {/strip}
{/function}

<div class="block-categories hidden-sm-down">
	{if $page.page_name != 'index'}
		<div class="title-block">
			<h3 class="d-flex cursor-pointer" data-toggle="collapse" data-target="#category-sub-menu">
                {l s='Categories' d='Shop.Theme.CategoryTree'}
                <i class="d-i-flex">
                    <svg aria-hidden="true" focusable="false" role="presentation"
                            class="icon icon-theme-229" viewBox="0 0 24 24">
                        <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                    </svg>
                </i>
            </h3>
		</div>
	{/if}
	{categories nodes=$categories.children}
</div>
