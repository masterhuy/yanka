{*
* 2007-2018 PrestaShop
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
</style>
<script type="text/javascript">
    function removePopup() {
        document.getElementById('JGDPR-popup').remove();
        return false;
    }
</script>
<div id="JGDPR-popup" style="background-color: {$setting.jgdpr_popup_bg|escape:'htmlall':'UTF-8'}; opacity:{$setting.jgdpr_popup_bgoppa/10|escape:'htmlall':'UTF-8'}; height: 76px; text-align: center; position: fixed; {$setting.jgdpr_popup_pos|escape:'htmlall':'UTF-8'}:0; left:0; right:0; z-index: 10; line-height: 76px">
    <p style="color:{$setting.jgdpr_popup_color|escape:'htmlall':'UTF-8'}">{$setting.jgdpr_popup_content|escape:'htmlall':'UTF-8'}
    <span style="cursor:pointer;float:right;color:{$setting.jgdpr_popup_color|escape:'htmlall':'UTF-8'}; margin-right:60px; font-size: 20px" onclick="removePopup()">×</span></p>
</div>
