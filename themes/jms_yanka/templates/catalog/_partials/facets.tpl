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
<div id="search_filters">
	<div class="filter-box">	
		<div class="box-title title-block">
			<h3 class="facet-title hidden-sm-down" data-toggle="collapse" data-target="#_desktop_search_filters_clear_all">
                {l s='Filter By' d='Shop.Theme.Actions'}
                <i class="d-i-flex">
                    <svg aria-hidden="true" focusable="false" role="presentation"
                            class="icon icon-theme-229" viewBox="0 0 24 24">
                        <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                    </svg>
                </i>
            </h3>
		</div>
        {if $activeFilters|count}
            <ul>
            {foreach from=$activeFilters item="filter"}
                {block name='active_filters_item'}
                <li class="filter-block">
                    {l s='%1$s: ' d='Shop.Theme.Catalog' sprintf=[$filter.facetLabel]}
                    {$filter.label}
                    <a class="js-search-link" href="{$filter.nextEncodedFacetsURL}"><i class="material-icons close">&#xE5CD;</i></a>
                </li>
                {/block}
            {/foreach}
            </ul>
        {/if}
		<div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper collapse in">
		    <button data-search-url="{$clear_all_link}" class="btn-default active btn-tertiary js-search-filters-clear-all">
				{l s='Clear all' d='Shop.Theme.Actions'}
		    </button>
		</div>
	</div>
    {foreach from=$facets item="facet"}
        {if $facet.displayed}
            <section class="facet {$facet.label|lower|replace:' ':''}">
                <h4 class="facet-title hidden-sm-down" data-toggle="collapse" data-target="#{$facet.label}">
                    {$facet.label}
                    <i class="d-i-flex">
                        <svg aria-hidden="true" focusable="false" role="presentation"
                                class="icon icon-theme-229" viewBox="0 0 24 24">
                            <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                        </svg>
                    </i>
                </h4>
                {assign var=_expand_id value=10|mt_rand:100000}
                {assign var=_collapse value=true}
                {foreach from=$facet.filters item="filter"}
                    {if $filter.active}{assign var=_collapse value=false}{/if}
                {/foreach}
                {if $facet.widgetType !== 'dropdown'}
                <div class="flex-box collapse in" id="{$facet.label}">
                    <ul id="facet_{$_expand_id}" class="{if !$_collapse} in{/if}">
                        {foreach from=$facet.filters item="filter"}
                            {if $filter.displayed}
                            <li {if isset($filter.properties.color)}class="color-style"{/if}>
                                <label class="facet-label{if $filter.active} active {/if}">
                                {if $facet.multipleSelectionAllowed}
                                    <span class="custom-checkbox">
                                    <input
                                        data-search-url="{$filter.nextEncodedFacetsURL}"
                                        type="checkbox"
                                        {if $filter.active } checked {/if}
                                    >
                                    <span class="checkmark"></span>
                                    {if isset($filter.properties.color)}
                                        <span class="color" style="background-color:{$filter.properties.color};{if $filter.properties.color == '#ffffff'}border: 1px solid #e5e5e5{/if}"></span>
                                        {elseif isset($filter.properties.texture)}
                                        <span class="color texture" style="background-image:url({$filter.properties.texture});background-size:cover;"></span>
                                        {else}
                                        <span {if !$js_enabled} class="ps-shown-by-js" {/if}></span>
                                    {/if}
                                    </span>
                                {else}
                                    <span class="custom-checkbox">
                                    <input
                                        data-search-url="{$filter.nextEncodedFacetsURL}"
                                        type="radio"
                                        name="filter {$facet.label}"
                                        {if $filter.active } checked {/if}
                                    >
                                    <span class="checkmark"></span>
                                    <span {if !$js_enabled} class="ps-shown-by-js" {/if}></span>
                                    </span>
                                {/if}

                                <a
                                    href="{$filter.nextEncodedFacetsURL}"
                                    class="_gray-darker search-link js-search-link"
                                    rel="nofollow"
                                >
                                    {$filter.label}
                                    {if $filter.magnitude}
                                    <span class="magnitude">{$filter.magnitude}</span>
                                    {/if}
                                </a>
                                </label>
                            </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            {else}
                <form>
                <input type="hidden" name="order" value="{$sort_order}">
                <select name="q">
                    <option disabled selected hidden>{l s='(no filter)' d='Shop.Theme'}</option>
                    {foreach from=$facet.filters item="filter"}
                    {if $filter.displayed}
                        <option
                        {if $filter.active}
                            selected
                            value="{$smarty.get.q}"
                        {else}
                            value="{$filter.nextEncodedFacets}"
                        {/if}
                        >
                        {$filter.label}
                        {if $filter.magnitude}
                            ({$filter.magnitude})
                        {/if}
                        </option>
                    {/if}
                    {/foreach}
                </select>
                {if !$js_enabled}
                    <button class="ps-hidden-by-js" type="submit">
                    {l s='Filter' d='Shop.Theme.Actions'}
                    </button>
                {/if}
                </form>
            {/if}
            </section>
        {/if}
    {/foreach}
</div>
