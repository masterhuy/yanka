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

	$(".ver_menu").click(function(){
		$(this).toggleClass("collapsed");
		$("#jms-vermegamenu-container").toggleClass("collapse");
	});

	$(window).scroll(function () {
    	if ($(window).scrollTop() > 180){
			menu.addClass("fixed");
			$("#jms-vermegamenu-container").addClass("collapse");

			$(".header.fixed .cart-icon").click(function(){
				$(".menu.fixed").addClass('changed');
			});
			  
			$(".header.fixed #cart_block .bg-overlay").click(function(){
				$(".menu.fixed").removeClass('changed');
			});

			$(".header.fixed #cart_block #close-button").click(function(){
				$(".menu.fixed").removeClass('changed');
			});
    	} else {
			menu.removeClass("fixed");
			$("#jms-vermegamenu-container").removeClass("collapse");
    	}
    });
})