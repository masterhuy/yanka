{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{assign var='icon' value=$icon|default:'check_circle'}
{assign var='modal_message' value=$modal_message|default:''}

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const confirmModal = $('#{$modal_id}');
        confirmModal.on('hidden.bs.modal', function () {
        confirmModal.modal('hide');
        confirmModal.trigger('modal:confirm', false);
        });

        $('.confirm-button', confirmModal).click(function() {
            confirmModal.trigger('modal:confirm', true);
        });
        $('.refuse-button', confirmModal).click(function() {
            confirmModal.trigger('modal:confirm', false);
        });
    });
</script>

<div id="{$modal_id}" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>
                    {$modal_title}
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12  col-sm-12" id="{$modal_id}-message">
                        {$modal_message}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12  col-sm-12 post-comment-buttons">
                        <button type="button" class="btn-default" data-dismiss="modal" aria-label="{l s='No' d='Modules.Productcomments.Shop'}">
                            {l s='No' d='Modules.Productcomments.Shop'}
                        </button>
                        <button type="button" class="btn-default" data-dismiss="modal" aria-label="{l s='Yes' d='Modules.Productcomments.Shop'}">
                            {l s='Yes' d='Modules.Productcomments.Shop'}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
