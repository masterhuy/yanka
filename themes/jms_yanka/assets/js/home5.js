/**
* 2007-2018 PrestaShop
*
* Joommasters Theme
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
$(document).ready(function() {
	var header = $(".jms-row.header");
	var menu = $(".jms-row.menu");

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 450 ){
			header.addClass("fixed");
			menu.addClass("fixed");
    	} else {
			header.removeClass("fixed");
			menu.removeClass("fixed");
    	}
    });
});