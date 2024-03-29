{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Order history' d='Shop.Theme.CustomerAccount'}
{/block}

{block name='page_content'}
  <h5>{l s='Here are the orders you\'ve placed since your account was created.' d='Shop.Theme.CustomerAccount'}</h5>

  {if $orders}
    <table class="table pt-table-04 table-striped table-labeled hidden-sm-down mt-20">
      <thead class="thead-default">
        <tr>
          <th class="history-title">{l s='Order reference' d='Shop.Theme.Checkout'}</th>
          <th class="history-title">{l s='Date' d='Shop.Theme.Checkout'}</th>
          <th class="history-title">{l s='Total price' d='Shop.Theme.Checkout'}</th>
          <th class="hidden-md-down history-title" class="history-title">{l s='Payment' d='Shop.Theme.Checkout'}</th>
          <th class="hidden-md-down history-title" class="history-title">{l s='Status' d='Shop.Theme.Checkout'}</th>
          <th class="history-title">{l s='Invoice' d='Shop.Theme.Checkout'}</th>
          <th class="history-title">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$orders item=order}
          <tr>
            <td scope="row">{$order.details.reference}</td>
            <td>{$order.details.order_date}</td>
            <td class="text-xs-right total-price">{$order.totals.total.value}</td>
            <td class="hidden-md-down">{$order.details.payment}</td>
            <td>
              <span
                class="label label-pill {$order.history.current.contrast}"
                style="background-color:{$order.history.current.color}"
              >
                {$order.history.current.ostate_name}
              </span>
            </td>
            <td class="text-xs-center hidden-md-down invoice-icon">
              {if $order.details.invoice_url}
                <a href="{$order.details.invoice_url}"><i class="fa fa-download"></i></a>
              {else}
                -
              {/if}
            </td>
            <td class="text-xs-center order-actions">
              <a href="{$order.details.details_url}" data-link-action="view-order-details" class="btn-default sm-mb-10">
                {l s='Details' d='Shop.Theme.CustomerAccount'}
              </a>
              {if $order.details.reorder_url}
                <a href="{$order.details.reorder_url}"class="btn-default" >{l s='Reorder' d='Shop.Theme.Actions'}</a>
              {/if}
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>

    <div class="orders hidden-md-up">
      {foreach from=$orders item=order}
        <div class="order">
          <div class="row">
            <div class="col-xs-10">
              <a href="{$order.details.details_url}"><h5>{$order.details.reference}</h5></a>
              <div class="date">{$order.details.order_date}</div>
              <div class="total">{$order.totals.total.value}</div>
              <div class="status">
                <span
                  class="label label-pill {$order.history.current.contrast}"
                  style="background-color:{$order.history.current.color}"
                >
                  {$order.history.current.ostate_name}
                </span>
              </div>
            </div>
            <div class="col-xs-2 text-xs-right">
                <div>
                  <a href="{$order.details.details_url}" data-link-action="view-order-details" title="{l s='Details' d='Shop.Theme.CustomerAccount'}">
                    <i class="material-icons">&#xE8B6;</i>
                  </a>
                </div>
                {if $order.details.reorder_url}
                  <div>
                    <a href="{$order.details.reorder_url}" title="{l s='Reorder' d='Shop.Theme.Actions'}">
                      <i class="material-icons">&#xE863;</i>
                    </a>
                  </div>
                {/if}
            </div>
          </div>
        </div>
      {/foreach}
    </div>

  {/if}
{/block}
