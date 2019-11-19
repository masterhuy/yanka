{*
 * @package Jms Drop Megamenu
 * @version 1.0
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}

<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg" href="#">
		<i class="d-i-flex">
			<svg width="24" height="24" viewBox="0 0 24 24">
				<use xlink:href="#icon-mobile-menu-toggle">
					<symbol id="icon-mobile-menu-toggle" fill="none" viewBox="0 0 24 24">
			            <path d="M0 6h24M0 12h16M0 18h24" stroke="currentColor" stroke-widht="1.6"></path>
			        </symbol>
				</use>
			</svg>
		</i>
	</a>
	{$menu_html|escape:'' nofilter}
</div>
<script type="text/javascript">
	var jmmm_event = '{$JMSMM_MOUSEEVENT}';
	var jmmm_duration = {$JMSMM_DURATION};	
</script>



