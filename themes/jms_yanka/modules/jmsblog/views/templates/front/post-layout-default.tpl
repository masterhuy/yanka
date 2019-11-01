{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $sidebar == 'left'} 
	{assign var="layout" value="layouts/layout-left-column.tpl"}
{elseif $sidebar == 'right'}
	{assign var="layout" value="layouts/layout-right-column.tpl"}
{elseif $sidebar == 'no'}	
	{assign var="layout" value="layouts/layout-full-width.tpl"}
{/if}
{extends file='page.tpl'}
{block name="page_content"}
{capture name=path}{$post.title|escape:'html':'UTF-8'}{/capture}
<div class="single-blog">
	<div class="blog-post">
		<h1 class="title">{$post.title|escape:'html':'UTF-8'}</h1>
		{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}	
		<ul class="post-meta">
			<li class="created">
				<span>
					<span>{$post.created|escape:'html':'UTF-8'|date_format:"%B %e, %Y"}</span>
				</span>
			</li>
			{if $jmsblog_setting.JMSBLOG_SHOW_CATEGORY}
				<li>
					{l s='In' d='Modules.JmsBlog'} 
					<a href="{jmsblog::getPageLink('jmsblog-category', $catparams)}">
						{$post.category_name|escape:'html':'UTF-8'}
					</a>
				</li>
			{/if}
		</ul>
		{if $post.link_video && $jmsblog_setting.JMSBLOG_SHOW_MEDIA}
			<div class="post-video">
				{$post.link_video}
			</div>
		{elseif $post.image && $jmsblog_setting.JMSBLOG_SHOW_MEDIA}
			<div class="post-thumb">
				<img src="{$image_baseurl|escape:'html':'UTF-8'}{$post.image|escape:'html':'UTF-8'}" alt="{l s='Image Blog' d='Modules.JmsBlog'}" />
			</div>
		{/if}
		<div class="post-fulltext">
			{$post.fulltext nofilter}	
		</div>
	</div>
{if $jmsblog_setting.JMSBLOG_SHOW_SOCIAL_SHARING}
	<div class="social-sharing">
		{literal}
			<script type="text/javascript">var switchTo5x=true;</script>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
		{/literal}
		<span class='st_sharethis_large' displayText='ShareThis'></span>
		{if $jmsblog_setting.JMSBLOG_SHOW_FACEBOOK}
			<span class='st_facebook_large' displayText='Facebook'></span>
		{/if}
		{if $jmsblog_setting.JMSBLOG_SHOW_TWITTER}
			<span class='st_twitter_large' displayText='Tweet'></span>
		{/if}
		{if $jmsblog_setting.JMSBLOG_SHOW_GOOGLEPLUS}
			<span class='st_googleplus_large' displayText='Google +'></span>
		{/if}
		{if $jmsblog_setting.JMSBLOG_SHOW_LINKEDIN}
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
		{/if}
		{if $jmsblog_setting.JMSBLOG_SHOW_PINTEREST}
			<span class='st_pinterest_large' displayText='Pinterest'></span>
		{/if}
		{if $jmsblog_setting.JMSBLOG_SHOW_EMAIL}
			<span class='st_email_large' displayText='Email'></span>
		{/if}
	</div>
{/if}
</div>
	{if $jmsblog_setting.JMSBLOG_COMMENT_ENABLE}	
		<div id="comments">
			{if $jmsblog_setting.JMSBLOG_FACEBOOK_COMMENT == 0}	
				{if $msg == 1}
					<div class="success">
						{l s='Your comment submited' d='Modules.JmsBlog'} ! 
						{if $jmsblog_setting.JMSBLOG_AUTO_APPROVE_COMMENT == 0} 
							{l s='Please waiting approve from Admin' d='Modules.JmsBlog'}.
						{/if}
					</div>
				{/if}
				{if $cerrors|@count gt 0}
					<ul>
						{foreach from=$cerrors item=cerror}
							<li class="error">{$cerror nofilter}</li>
						{/foreach}
					</ul>
				{/if}
				{if $comments}
					<div id="accordion" class="panel-group">
						<div id="post-comments">
							{foreach from=$comments item=comment key = k}
								<div class="post-comment clearfix">
									<div class="post-comment-info">
										<div class="user-image">
											<svg fill="none" viewBox="0 0 24 24" id="icon_avatar" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path fill="transparent" d="M0 0h24v24H0z"></path><path d="M2.826 23.2c.36-5.393 4.323-9.4 9.174-9.4 4.851 0 8.815 4.007 9.174 9.4H2.826z" stroke="currentColor" stroke-width="1.6"></path><circle cx="12" cy="6" r="5.2" stroke="currentColor" stroke-width="1.6"></circle></svg>
										</div>
										<div class="left">
											<div class="title">
												<div>
													{l s='By' d='Modules.JmsBlog'}
													<span>{$comment.customer_name|escape:'html':'UTF-8'}</span>
												</div>
												<div>
													{$comment.time_add|escape:'html':'UTF-8'|date_format:'%B %e, %Y'}
												</div>
											</div>
											<p class="post-comment-content">{$comment.comment|truncate:200:'...'|escape:'html':'UTF-8'}</p>
										</div>
									</div>
								</div>
							{/foreach}
						</div>
					</div>
				{/if}
				{if $jmsblog_setting.JMSBLOG_ALLOW_GUEST_COMMENT || (!$jmsblog_setting.JMSBLOG_ALLOW_GUEST_COMMENT && $logged)}
				<div class="commentForm">
					<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id={$post.post_id nofilter}&action=submitComment">
						<h4 class="heading">Leave a Comment</h4>
						<div class="form-group">
							<label for="comment_name">{l s='Name' d='Modules.JmsBlog'}</label>
							<input id="customer_name" placeholder="Enter your name" class="form-control" name="customer_name" type="text" value="{$customer.firstname}{$customer.lastname}" required />
						</div>
						<div class="form-group">
							<label for="comment_title">{l s='Email address' d='Modules.JmsBlog'}</label>
							<input id="comment_title" placeholder="john.smith@example.com" class="form-control" name="email" type="text" value="{$customer.email}" required />
						</div>
						<div class="form-group">
							<label for="comment_title">{l s='Your Website' d='Modules.JmsBlog'}</label>
							<input id="customer_site" placeholder="Your website" class="form-control" name="customer_site" type="text" value=""/>
						</div>
						<div class="form-group">
							<label for="content">{l s='Your Comment' d='Modules.JmsBlog'}</label>
							<textarea id="comment" placeholder="Write your comments here" class="form-control" name="comment" rows="5" required></textarea>
						</div>
						<div id="new_comment_form_footer">
							<input id="item_id_comment_send" name="post_id" type="hidden" value="{$post.post_id nofilter}" />
							<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
							<div class="form-group">
								<p>
									<img id="capcha">
									<span class="btn-change btn-default active" onclick="recapcha()">
										<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 9h-7v-7h1v5.2c1.853-4.237 6.083-7.2 11-7.2 6.623 0 12 5.377 12 12s-5.377 12-12 12c-6.286 0-11.45-4.844-11.959-11h1.004c.506 5.603 5.221 10 10.955 10 6.071 0 11-4.929 11-11s-4.929-11-11-11c-4.66 0-8.647 2.904-10.249 7h5.249v1z"/></svg>
									</span>
								</p>
								<label for="content">{l s='Captcha' d='Modules.JmsBlog'}</label>
								<input type="text" class="form-control" name="capcha" required>
							</div>
							<button id="submitComment" class="btn-default active" name="submitComment" type="submit">{l s='Post Comment' d='Modules.JmsBlog'}</button>
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
			{else}
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.4";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-comments" data-href="{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" data-width="100%" data-numposts="5"></div>		
			{/if}
		</div>
	{/if}
{/block}


