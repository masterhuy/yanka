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
<article id="address-{$address.id}" class="address" data-id-address="{$address.id}">
    <div class="address-body">
        <h4>{l s='Your Addresses' d='Shop.Theme.Actions'}</h4>
        <div class="addresses-create-new">
            <a href="{$urls.pages.address}" data-link-action="add-address" class="btn-default">
                <span>{l s='Add a new address' d='Shop.Theme.Actions'}</span>
            </a>
        </div>
        <a href="page-account.html" class="btn-link btn-lg pt-link-back">
            <div class="pt-icon">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#icon-arrow_large_left"></use>
                </svg>
            </div>
            <span class="pt-text">Return To Account Page</span>
        </a>
        <div class="pt-wrapper">
            <h3 class="pt-title">TITLE</h3>
            <div class="pt-table-responsive">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td>{$address.firstname} {$address.lastname} </td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{$address.address1}</td>
                        </tr>
                        <tr>
                            <td>Address 2:</td>
                            <td>{$address.address2}</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>{$address.country}</td>
                        </tr>
                        <tr>
                            <td>Postcode:</td>
                            <td>{$address.postcode}</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>{$address.phone}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="address-footer">
        <a href="{url entity=address id=$address.id params=['delete' => 1, 'token' => $token]}" data-link-action="delete-address" class="btn-default btn-delete">
            <i class="fa fa-trash"></i>
            <span>{l s='Delete' d='Shop.Theme.Actions'}</span>
        </a>
        <a href="{url entity=address id=$address.id}" data-link-action="edit-address" class="btn-default">
            <i class="fa fa-pencil-square-o"></i>
            <span>{l s='Update' d='Shop.Theme.Actions'}</span>
        </a>
    </div>
</article>
