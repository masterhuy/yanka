{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $msg == 1}<div class="success">{l s='Your comment submited' d='Modules.JmsBlog'} ! {if $jmsblog_setting.JMSBLOG_AUTO_APPROVE_COMMENT == 0} {l s='Please waiting approve from Admin' d='Modules.JmsBlog'}.{/if}</div>{/if}
{if $cerrors|@count gt 0}
	<ul>
	{foreach from=$cerrors item=cerror}
		<li class="error">{$cerror nofilter}</li>
	{/foreach}
	</ul>
{/if}
<div id="accordion" class="panel-group">
	<div class="panel panel-default">
		<div class="comment-heading clearfix">
			<h5><a data-toggle="collapse" data-parent="#accordion" href="#post-comments">{$comments|@count nofilter} {l s='Comments' d='Modules.JmsBlog'}</a></h5>
		</div>
		<div id="post-comments" class="panel-collapse collapse">
		{if $comments}
			{foreach from=$comments item=comment key = k}
				<div class="post-comment clearfix">
					<div class="post-comment-info">
					<img class="attachment-widget wp-post-image img-responsive" src="{$image_baseurl nofilter}user.png" />
					<h6>{$comment.customer_name nofilter}</h6>
					<span class="customer_site">{$comment.customer_site nofilter}</span>
					<span class="time_add">{$comment.time_add nofilter}</small>
					</div>
					<p class="post-comment-content">{$comment.comment nofilter}</p>
				</div>
			{/foreach}
		{/if}
		</div>
	</div>
</div>
{if $jmsblog_setting.JMSBLOG_ALLOW_GUEST_COMMENT || (!$jmsblog_setting.JMSBLOG_ALLOW_GUEST_COMMENT && $logged)}
<div class="commentForm">
	<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id={$post.post_id nofilter}&action=submitComment">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="heading">Leave a Comment</h4>
				<p class="h-info">{l s='Your email address will not be published' d='Modules.JmsBlog'}.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_name">{l s='Your Name' d='Modules.JmsBlog'}<sup class="required">*</sup></label>
					<input id="customer_name" class="form-control" name="customer_name" type="text" value="{$customer.firstname} {$customer.lastname}" required />
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="comment_title">{l s='Your Email' d='Modules.JmsBlog'}<sup class="required">*</sup></label>
					<input id="comment_title" class="form-control" name="email" type="text" value="{$customer.email}" required />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="comment_title">{l s='Your Website' d='Modules.JmsBlog'}</label>
			<input id="customer_site" class="form-control" name="customer_site" type="text" value=""/></br>
		</div>
		<div class="form-group">
			<label for="content">{l s='Your Comment' d='Modules.JmsBlog'}<sup class="required">*</sup></label>
			<textarea id="comment" class="form-control" name="comment" rows="8" required></textarea>
		</div>
		<div id="new_comment_form_footer">
			<input id="item_id_comment_send" name="post_id" type="hidden" value="{$post.post_id nofilter}" />
			<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
			<div class="form-group">
				<p>
					<img id="capcha">
					<span class="btn btn-default" onclick="recapcha()">
						<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 9h-7v-7h1v5.2c1.853-4.237 6.083-7.2 11-7.2 6.623 0 12 5.377 12 12s-5.377 12-12 12c-6.286 0-11.45-4.844-11.959-11h1.004c.506 5.603 5.221 10 10.955 10 6.071 0 11-4.929 11-11s-4.929-11-11-11c-4.66 0-8.647 2.904-10.249 7h5.249v1z"/></svg>
					</span>
				</p>
				<label for="content">{l s='Captcha' d='Modules.JmsBlog'}<sup class="required">*</sup></label>
				<input type="text" class="form-control" name="capcha" required>
			</div>
			<button id="submitComment" class="btn btn-default" name="submitComment" type="submit">{l s='Submit Comment' d='Modules.JmsBlog'}</button>
		</div>
	</form>
	<script>
		{literal}
		function recapcha() {
			document.getElementById('capcha').src = `${prestashop.urls.base_url}modules/jmsblog/ajax_jmsblog.php?action=capcha&time=${new Date().getTime()}`;
		}
		recapcha();
	//{/literal}
	$("#commentForm").validate({
	  rules: {
		customer_name: "required",
		email: {
		  required: true,
		  email: true
		},
		capcha: {
			require: true,
		}
	  }
	});
	</script>
</div>
{/if}
{if !$jmsblog_setting.JMSBLOG_ALLOW_GUEST_COMMENT && !$logged}
	{l s='Please Login to comment' d='Modules.JmsBlog'}
{/if}