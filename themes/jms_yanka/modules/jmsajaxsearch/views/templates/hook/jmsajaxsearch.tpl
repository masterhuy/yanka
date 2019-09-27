{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search" data-toggle="modal" data-target="#search-form">
		<span>{l s='Search' d='Modules.JmsAjaxsearch'}</span>
		<i class="d-flex">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-168" viewBox="0 0 24 24">
				<path d="M13.261 2.475a8.177 8.177 0 0 1 2.588 1.738 8.172 8.172 0 0 1 1.738 2.588 7.97 7.97 0 0 1 .635 3.164 7.836 7.836 0 0 1-.527 2.861 8.355 8.355 0 0 1-1.426 2.412l4.902 4.902c.117.131.176.28.176.449s-.059.319-.176.449c-.065.052-.137.095-.215.127s-.156.049-.234.049-.156-.017-.234-.049-.149-.075-.215-.127l-4.902-4.902c-.703.6-1.507 1.074-2.412 1.426s-1.859.528-2.862.528a7.945 7.945 0 0 1-3.164-.635 8.144 8.144 0 0 1-2.588-1.738 8.15 8.15 0 0 1-1.738-2.588 7.962 7.962 0 0 1-.635-3.164 7.97 7.97 0 0 1 .635-3.164 8.172 8.172 0 0 1 1.738-2.588 8.15 8.15 0 0 1 2.588-1.738c.989-.423 2.044-.635 3.164-.635s2.174.212 3.164.635zM3.759 12.641c.358.834.85 1.563 1.475 2.188s1.354 1.117 2.188 1.475c.833.358 1.726.537 2.676.537s1.843-.179 2.676-.537c.833-.357 1.563-.85 2.188-1.475s1.116-1.354 1.475-2.188a6.705 6.705 0 0 0 .537-2.676c0-.95-.179-1.842-.537-2.676-.358-.833-.85-1.563-1.475-2.188s-1.354-1.116-2.188-1.475c-.835-.356-1.727-.536-2.677-.536s-1.843.18-2.676.537c-.833.358-1.563.85-2.188 1.475S4.117 6.456 3.759 7.289a6.694 6.694 0 0 0-.537 2.676c0 .951.178 1.843.537 2.676z"/>
			</svg>
		</i>
		<span class="tooltip-wrap bottom"> 
			<span class="tooltip-text">{l s='Search' d='Modules.JmsAjaxsearch'}</span> 
		</span>
	</a>
	<div id="search-form" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content container">
				<div class="search-box">
					<div class="label-form">
						<p>{l s='WHAT ARE YOU LOOKING FOR?' d='Modules.JmsAjaxsearch'}</p>
						<i class="d-flex" data-dismiss="modal">
							<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-164" viewBox="0 0 24 24">
								<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"></path>
							</svg>
						</i>
					</div>
					<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" name="orderby" value="position" />
						<input type="hidden" name="orderway" value="desc" />
						<input autofocus type="text" id="ajax_search" name="search_query" placeholder="{l s='Search Products...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
					</form>
					<div id="search_result"></div>
				</div>	
			</div>
		</div>
	</div>
</div>

