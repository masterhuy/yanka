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

<script type="text/javascript">
    var productCommentPostErrorMessage = '{l s='Sorry, your review cannot be posted.' d='Modules.Productcomments.Shop' js=1}';
</script>

<div id="post-product-comment-modal" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>{l s='Write your review' d='Modules.Productcomments.Shop'}</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form id="post-product-comment-form" action="{$post_comment_url nofilter}" method="POST">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            {if isset($product) && $product}
                                {block name='product_flags'}
                                    <ul class="product-flags">
                                        {foreach from=$product.flags item=flag}
                                        <li class="product-flag {$flag.type}">{$flag.label}</li>
                                        {/foreach}
                                    </ul>
                                {/block}

                                {block name='product_cover'}
                                    <div class="product-cover">
                                        {if $product.cover}
                                            <img class="js-qv-product-cover" src="{$product.cover.bySize.medium_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
                                        {else}
                                            <img src="{$urls.no_picture_image.bySize.large_default.url nofilter}" style="width:100%;">
                                        {/if}
                                    </div>
                                {/block}
                            {/if}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h3>{$product.name}</h3>
                            {block name='product_description_short'}
                                <div itemprop="description">{$product.description_short nofilter}</div>
                            {/block}
                        </div>
                        <div class="col-md-12 col-sm-12">
                            {if $criterions|@count > 0}
                                <ul id="criterions_list">
                                    {foreach from=$criterions item='criterion'}
                                        <li>
                                            <div class="criterion-rating">
                                                <label>{$criterion.name|escape:'html':'UTF-8'}:</label>
                                                <div class="grade-stars" data-grade="3" data-input="criterion[{$criterion.id_product_comment_criterion}]"></div>
                                            </div>
                                        </li>
                                    {/foreach}
                                </ul>
                            {/if}
                        </div>
                    </div>

                    <div class="row">
                        {if !$logged}
                            <div class="col-md-8 col-sm-8">
                                <label class="form-label" for="comment_title">{l s='Title' d='Modules.Productcomments.Shop'}<span class="required">*</span></label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="form-label" for="customer_name">{l s='Your name' d='Modules.Productcomments.Shop'}<span class="required">*</span></label>
                            </div>
                        {else}
                            <div class="col-md-12 col-sm-12">
                                <label class="form-label" for="comment_title">{l s='Review Title' d='Modules.Productcomments.Shop'}<span class="required">*</span></label>
                            </div>
                        {/if}
                    </div>

                    <div class="row">
                        {if !$logged}
                            <div class="col-md-8 col-sm-8">
                                <input name="comment_title" type="text" placeholder="Give your review a title"/>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input name="customer_name" type="text" placeholder="Give your review a title"/>
                            </div>
                        {else}
                            <div class="col-md-12 col-sm-12">
                                <input name="comment_title" type="text" placeholder="Give your review a title" />
                            </div>
                        {/if}
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label class="form-label" for="comment_content">{l s='Body of Review' d='Modules.Productcomments.Shop'}<span class="required">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <textarea name="comment_content" rows="5" placeholder="Write your comments here"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label class="form-label"><span class="required">*</span> {l s='Required fields' d='Modules.Productcomments.Shop'}</label>
                        </div>
                        <div class="col-md-6 col-sm-6 post-comment-buttons">
                            <button type="button" class="btn-default" data-dismiss="modal" aria-label="{l s='Cancel' d='Modules.Productcomments.Shop'}">
                                {l s='Cancel' d='Modules.Productcomments.Shop'}
                            </button>
                            <button type="submit" class="btn-default">
                                {l s='Send' d='Modules.Productcomments.Shop'}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{* Comment posted modal *}
{if $moderation_active}
    {assign var='comment_posted_message' value={l s='Your comment has been submitted and will be available once approved by a moderator.' d='Modules.Productcomments.Shop'}}
{else}
    {assign var='comment_posted_message' value={l s='Your comment has been added!' d='Modules.Productcomments.Shop'}}
{/if}
{include file='module:productcomments/views/templates/hook/alert-modal.tpl'
    modal_id='product-comment-posted-modal'
    modal_title={l s='Review sent' d='Modules.Productcomments.Shop'}
    modal_message=$comment_posted_message
}

{* Comment post error modal *}
{include file='module:productcomments/views/templates/hook/alert-modal.tpl'
    modal_id='product-comment-post-error'
    modal_title={l s='Your review cannot be sent' d='Modules.Productcomments.Shop'}
    icon='error'
}
