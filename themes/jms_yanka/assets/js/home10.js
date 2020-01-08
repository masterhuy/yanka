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
	var menu = $(".jms-row.menu");
	var imageUp = document.getElementsByClassName('js-init-parallax-up');
	var imageDown = document.getElementsByClassName('js-init-parallax-down');

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 180){
			menu.addClass("fixed");
    	} else {
			menu.removeClass("fixed");
    	}
	});

	if (imageUp.length && imageDown.length){
		initParallax();
	};

	function initParallax(){
		new simpleParallax(imageUp, {
			orientation: 'up',
			overflow: 'true'
		});
	
		new simpleParallax(imageDown, {
			orientation: 'down',
			overflow: 'true'
		});
	};

});

