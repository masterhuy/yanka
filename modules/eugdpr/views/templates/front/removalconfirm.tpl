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
{extends file='page.tpl'}
{block name='page_content'}
{if $request}
<h1>{l s='Send Deletion Request' mod='eugdpr'}</h1>
{else}
<h1>{l s='Remove Personal Data' mod='eugdpr'}</h1>
{/if}
<p>{$message|escape:'htmlall':'UTF-8'}</p>
{if !$request}
{if $addresses|count > 0}<h1>{l s='All Addresses' mod='eugdpr'}</h1>{/if}
{foreach from=$addresses item=address}
<div class="address-block col-sm-4">
    <p><strong>Name:</strong> {$address.lastname|escape:'htmlall':'UTF-8'} {$address.firstname|escape:'htmlall':'UTF-8'}</p>
    <p><strong>Address 1:</strong> {$address.address1|escape:'htmlall':'UTF-8'}</p>
    <p><strong>Postal code:</strong> {$address.postcode|escape:'htmlall':'UTF-8'}</p>
    <p><strong>City:</strong> {$address.city|escape:'htmlall':'UTF-8'}</p>
    <p><strong>Company:</strong> {$address.company|escape:'htmlall':'UTF-8'}</p>
</div>
{/foreach}
{/if}
<p class="remove-data"><a  href="{$remove_url|escape:'htmlall':'UTF-8'}"><button class="btn btn-primary">{if $request}{l s='Request' mod='eugdpr'}{else}{l s='Remove' mod='eugdpr'}{/if}</button></a></p>
{/block}