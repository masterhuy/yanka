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
{extends file="helpers/form/form.tpl"}

{block name="field"}
    {if $input.type == 'number'}
    <div class="col-lg-9">
        <input type="number" min="{$input.min|escape:'htmlall':'UTF-8'}" max="{$input.max|escape:'htmlall':'UTF-8'}" name="{$input.name|escape:'htmlall':'UTF-8'}" value="{$fields_value[$input.name]|escape:'htmlall':'UTF-8'}" style="float:left; height: 31px; padding: 6px 8px; font-size: 12px; line-height: 1.42857; color: #555; background-color: #F5F8F9; border: 1px solid #C7D6DB; border-radius: 3px;">
        {if isset($input.unitname)}
        <select style="float:left; width: unset;" name="{$input.unitname|escape:'htmlall':'UTF-8'}">
            {foreach $input.options as $option}
                <option value="{$option.value|escape:'htmlall':'UTF-8'}" {if $fields_value[$input.unitname] == $option.value}selected{/if}>{$option.name|escape:'htmlall':'UTF-8'}</option>
            {/foreach}
        </select>
        {/if}
        {if isset($input.unit)}
        <div style="float:left; height: 31px; padding: 6px 8px; font-size: 12px; line-height: 1.42857; color: #555; background-color: #F5F8F9; border: 1px solid #C7D6DB; border-radius: 3px;">
            {$input.unit|escape:'htmlall':'UTF-8'}
        </div>
        {/if}
        {if isset($input.idesc)}
        <p class="help-block" style="clear:both;">{$input.idesc|escape:'htmlall':'UTF-8'}</p>
        {/if}
    </div>
    {/if}
    {$smarty.block.parent}
{/block}
{block name="script"}
$("label[for=jgdpr_manually_off]").click(function() {
    $(".message").removeClass('hide');
    $(".message").addClass('show');
    $(".request").removeClass('show');
    $(".request").addClass('hide');
})
$("label[for=jgdpr_manually_on]").click(function() {
    $(".message").removeClass('show');
    $(".message").addClass('hide');
    $(".request").removeClass('hide');
    $(".request").addClass('show');
})
{/block}