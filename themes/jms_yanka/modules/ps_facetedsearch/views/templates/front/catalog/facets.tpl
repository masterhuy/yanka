{**
  * 2007-2019 PrestaShop.
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
  * that is bundled with this package in the file LICENSE.txt.
  * It is also available through the world-wide-web at this URL:
  * https://opensource.org/licenses/AFL-3.0
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
  * @copyright 2007-2019 PrestaShop SA
  * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *}
{if $displayedFacets|count}
  <div id="search_filters">
    

    {block name='facets_clearall_button'}
      {if $activeFilters|count}
        {block name='facets_title'}
        <div class="facet filter-by">
          <p class="facet-title hidden-sm-down" data-target="#facet_filter" data-toggle="collapse" aria-expanded="true">
            {l s='Filter By' d='Shop.Theme.Actions'}
            <i class="d-i-flex">
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                </svg>
            </i>
          </p>
          {if $activeFilters|count}
            <div id="facet_filter" class="flex-box collapse in">
              <ul>
                {foreach from=$activeFilters item="filter"}
                  {block name='active_filters_item'}
                    <li class="filter-block">
                      {l s='%1$s: ' d='Shop.Theme.Catalog' sprintf=[$filter.facetLabel]}
                      {$filter.label}
                      <a class="js-search-link" href="{$filter.nextEncodedFacetsURL}"></a>
                    </li>
                  {/block}
                {/foreach}
              </ul>
              <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
                <button data-search-url="{$clear_all_link}" class="btn-clear btn-default js-search-filters-clear-all">
                  {l s='Clear all' d='Shop.Theme.Actions'}
                </button>
              </div>
            </div>
          {/if}
          
        </div>
        {/block}
        
      {/if}
    {/block}
    {foreach from=$displayedFacets item="facet"}
      <section class="facet {$facet.label} clearfix">
        {assign var=_expand_id value=10|mt_rand:100000}
        {assign var=_collapse value=true}
        {foreach from=$facet.filters item="filter"}
          {if $filter.active}{assign var=_collapse value=false}{/if}
        {/foreach}

          <h4 class="facet-title" data-target="#facet_{$_expand_id}" data-toggle="collapse"{if !$_collapse} aria-expanded="true"{/if}>
            {$facet.label}
            <i class="d-i-flex">
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                </svg>
            </i>
          </h4>
          <span class="float-xs-right">
            <span class="navbar-toggler collapse-icons">
              <i class="material-icons add">&#xE313;</i>
              <i class="material-icons remove">&#xE316;</i>
            </span>
          </span>

        {if in_array($facet.widgetType, ['radio', 'checkbox'])}
          {block name='facet_item_other'}
          <div class="flex-box collapse in" id="facet_{$_expand_id}">
            <ul >
              {foreach from=$facet.filters key=filter_key item="filter"}
                {if !$filter.displayed}
                  {continue}
                {/if}

                <li>
                  <label class="facet-label{if $filter.active} active {/if}" for="facet_input_{$_expand_id}_{$filter_key}">
                    {if $facet.multipleSelectionAllowed}
                      <span class="custom-checkbox">
                        <input
                          id="facet_input_{$_expand_id}_{$filter_key}"
                          data-search-url="{$filter.nextEncodedFacetsURL}"
                          type="checkbox"
                          {if $filter.active }checked{/if}
                        >
                        <span class="checkmark"></span>
                        {if isset($filter.properties.color)}
                          <span class="color" style="background-color:{$filter.properties.color};{if $filter.properties.color == '#ffffff'}border: 1px solid #ebebeb{/if}"></span>
                        {elseif isset($filter.properties.texture)}
                          <span class="color texture" style="background-image:url({$filter.properties.texture});background-size:cover;"></span>
                        {else}
                          <span {if !$js_enabled} class="ps-shown-by-js" {/if}><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                        {/if}
                      </span>
                    {else}
                      <span class="custom-radio">
                        <input
                          id="facet_input_{$_expand_id}_{$filter_key}"
                          data-search-url="{$filter.nextEncodedFacetsURL}"
                          type="radio"
                          name="filter {$facet.label}"
                          {if $filter.active }checked{/if}
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
                      {if $filter.magnitude and $show_quantities}
                        <span class="magnitude">({$filter.magnitude})</span>
                      {/if}
                    </a>
                  </label>
                </li>
              {/foreach}
            </ul>
          </div>
          {/block}

        {elseif $facet.widgetType == 'dropdown'}
          {block name='facet_item_dropdown'}
          <div class="flex-box collapse in" id="facet_{$_expand_id}">
            <ul>
              <li>
                <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {$active_found = false}
                    <span>
                      {foreach from=$facet.filters item="filter"}
                        {if $filter.active}
                          {$filter.label}
                          {if $filter.magnitude and $show_quantities}
                            ({$filter.magnitude})
                          {/if}
                          {$active_found = true}
                        {/if}
                      {/foreach}
                      {if !$active_found}
                        {l s='(no filter)' d='Shop.Theme.Global'}
                      {/if}
                    </span>
                    <i class="material-icons float-xs-right">&#xE5C5;</i>
                  </a>
                  <div class="dropdown-menu">
                    {foreach from=$facet.filters item="filter"}
                      {if !$filter.active}
                        <a
                          rel="nofollow"
                          href="{$filter.nextEncodedFacetsURL}"
                          class="select-list"
                        >
                          {$filter.label}
                          {if $filter.magnitude and $show_quantities}
                            ({$filter.magnitude})
                          {/if}
                        </a>
                      {/if}
                    {/foreach}
                  </div>
                </div>
              </li>
            </ul>
          </div>
          {/block}

        {elseif $facet.widgetType == 'slider'}
          {block name='facet_item_slider'}
            {foreach from=$facet.filters item="filter"}
              <div id="facet_{$_expand_id}" class="flex-box collapse in">
                <ul 
                  class="faceted-slider"
                  data-slider-min="{$facet.properties.min}"
                  data-slider-max="{$facet.properties.max}"
                  data-slider-id="{$_expand_id}"
                  data-slider-values="{$filter.value|@json_encode}"
                  data-slider-unit="{$facet.properties.unit}"
                  data-slider-label="{$facet.label}"
                  data-slider-specifications="{$facet.properties.specifications|@json_encode}"
                  data-slider-encoded-url="{$filter.nextEncodedFacetsURL}"
                >
                  <li>

                    <div id="slider-range_{$_expand_id}"></div>
                    <p id="facet_label_{$_expand_id}" class="ranger">
                      {$filter.label}
                    </p>
                  </li>
                </ul>
              </div>
            {/foreach}
          {/block}
        {/if}
      </section>
    {/foreach}
  </div>
{/if}
