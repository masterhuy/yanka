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
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
				<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
					l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z"></path>
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
						<p>{l s='What are you Looking for?' d='Modules.JmsAjaxsearch'}</p>
						<i class="d-flex" data-dismiss="modal">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
								<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
							</svg>
						</i>
					</div>
					<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" name="orderby" value="position" />
						<input type="hidden" name="orderway" value="desc" />
						<input autofocus type="text" id="ajax_search" name="search_query" placeholder="{l s='Search products...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
					</form>
					<div id="search_result"></div>
				</div>	
			</div>
		</div>
	</div>
</div>

