{include file='_partials/form-errors.tpl' errors=$errors['']}

{* TODO StarterTheme: HOOKS!!! *}

<form id="login-form" action="{$action}" method="post">
    <section>
        {block name='form_fields'}
            {foreach from=$formFields item="field"}
                {block name='form_field'}
                    {form_field field=$field}
                {/block}
            {/foreach}
        {/block}
    </section>

    <footer class="form-footer text-xs-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        {block name='form_buttons'}
            <button class="btn-default w-100" data-link-action="sign-in" type="submit" class="form-control-submit">
                {l s='Login' d='Shop.Theme.Actions'}
            </button>
        {/block}

        <div class="forgot-password">
            <a href="{$urls.pages.password}" rel="nofollow">
                {l s='Lost your password?' d='Shop.Theme.CustomerAccount'}
            </a>
        </div>	
    </footer>
</form>
