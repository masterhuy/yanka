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
*  @copyright  2017-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<style type="text/css">
    #woorebought-popup {
            background-color: {$setting.JRB_BACKGROUND};
            border-radius:{$setting.JRB_BORDER_RADIUS}px;
    }
    #woorebought-popup p {
            color: {$setting.JRB_TEXT_COLOR} !important;
            font-size:{$setting.JRB_TEXT_SIZE}px;
    }
    #woorebought-popup small {
            color:{$setting.JRB_TIME_COLOR} !important;
            font-size:{$setting.JRB_TIME_SIZE}px !important;
    }
     #woorebought-popup a {
            color:{$setting.JRB_LINK_COLOR} !important;
            font-size:{$setting.JRB_LINK_SIZE}px !important;
    }
    {$setting.JRB_CUSTOM_CSS}
</style>
<div id="woorebought-popup" class="{$setting.JRB_IMAGE_POSITION} {$setting.JRB_POPUP_POSITION} animated" style="display: none;"
     data-show_trans="{$setting.JRB_POPUP_SHOW_ANIMATE}"
     data-hide_trans="{$setting.JRB_POPUP_HIDE_ANIMATE}"
     data-popup_content="{$setting.JRB_POPUP_CONTENT}"
     >
    <div class="woorebought-content"></div>
    {if $setting.JRB_CLOSE_ICON}
        <span id="popup-close">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
            </svg>
        </span>
    {/if}
</div>

<script type="text/javascript">
    'use strict';
    var woorebought = {
        use_ajax    : {$setting.JRB_AJAX},
        loop        : {$setting.JRB_LOOP},
        init_delay  : {$setting.JRB_INIT_TIME},
        total       : {$setting.JRB_TOTAL},
        display_time: {$setting.JRB_DISPLAY_TIME},
        next_time   : {$setting.JRB_NEXT_TIME},
        image       : {$setting.JRB_EXTERNAL_LINK},
        count       : 0,
        intel       : 0,
        id          : 0,
        popup_content    : '',
        products    : '',
        ajax_url    : '{$ajaxpath}',
        init        : function () {
            setTimeout(function () {
                woorebought.get_product();
            }, this.init_delay * 1000);

        },
        popup_show: function () {
            var count = this.count++;
            if (count == this.total-1) {
                return;
            }
            var popup_id = jQuery('#woorebought-popup'),
                popup_show_trans = jQuery('#woorebought-popup').data('show_trans'),
                popup_hide_trans = jQuery('#woorebought-popup').data('hide_trans');
            if (popup_id.hasClass(popup_hide_trans)) {
                jQuery(popup_id).removeClass(popup_hide_trans);
            }
            jQuery(popup_id).addClass(popup_show_trans).css('display', 'flex');
            setTimeout(function () {
                woorebought.popup_hide();
            }, this.display_time * 1000);
        },

        popup_hide: function () {
            var popup_id = jQuery('#woorebought-popup'),
                popup_show_trans = jQuery('#woorebought-popup').data('show_trans'),
                popup_hide_trans = jQuery('#woorebought-popup').data('hide_trans');

            if (popup_id.hasClass(popup_show_trans)) {
                jQuery(popup_id).removeClass(popup_show_trans);
            }
            jQuery('#woorebought-popup').addClass(popup_hide_trans);
            jQuery('#woorebought-popup').fadeOut((this.next_time>1)?1000:0);
            if (this.loop) {
                this.intel = setTimeout(function () {
                    woorebought.get_product();
                }, this.next_time * 1000);
            }
        },
        get_product : function () {
            if (this.use_ajax) {
                var str_data;
                if (this.id) {
                    str_data = '&id=' + this.id;
                } else {
                    str_data = '';
                }
                var wb = this;
                jQuery.ajax({
                    type   : 'POST',
                    data   : 'action=woorebought_show_product' + str_data,
                    url    : this.ajax_url,
                    success: function (respond) {
                        // console.log(respond);
                        wb.products = respond;
                    },
                    error  : function (respond) {
                    }
                })
            }
            // console.log(this);
            var products = this.products;
            var popup_content = this.popup_content;
            var image_redirect = this.image;
            products = jQuery.parseJSON(products);
            if (products.length > 0) {
                /*Get data*/
                var index = woorebought.random(0, products.length - 1);
                var product = products[index];
                var data_address = '<span class="address">from ' + product.address + '</span>';
                var data_product = product.title;
                var data_product_link = '<a target="_blank" title="'+ product.title +'" href="' + product.product_link + '">' + '<span>' + product.title + '</span>' + '</a>';
                var data_time = '<small>' + product.time + ' ago </small>';
                var image_html = '';
                var img = $('<img src="' + product.image_link + '">');
                var image_html = $('<div>').append($(img).clone()).html();
                if (product.image_link && image_redirect) {
                        image_html = '<a target="_blank" href="' + product.product_link + '">' + image_html + '</a>';
                }
                /*Replace Content*/
                {literal}
                var replaceArray = ['{address}', '{product_name}', '{product_link}', '{time_ago}'];
                {/literal}
                var replaceArrayValue = [data_address, data_product, data_product_link, data_time];
                var finalAns = popup_content;
                for (var i = replaceArray.length - 1; i >= 0; i--) {
                    finalAns = finalAns.replace(replaceArray[i], replaceArrayValue[i]);
                }
                var html = image_html + '<p>' + finalAns + '</p>';
                jQuery('.woorebought-content').html(html);
                // console.log('show');
                $(img).load(function(){
                    // console.log(image_html);
                    woorebought.popup_show();
                })

            }
        },
        close_notify: function () {
            jQuery('#popup-close').on('click', function () {
                woorebought.popup_hide();
            });
        },
        random      : function (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    }

    jQuery(document).ready(function () {
        if (jQuery('#woorebought-popup').length > 0) {
            var data = jQuery('#woorebought-popup').data();
            var popup = woorebought;
            popup.products = '{$products|@json_encode|replace:'\'':'\\\'' nofilter}';
            popup.popup_content = data.popup_content;

            if (data.product) {
                popup.id = data.product;
            }
            popup.init();
        }

        jQuery('#popup-close').on('click', function () {
            woorebought.popup_hide();
        });
    });
</script>
