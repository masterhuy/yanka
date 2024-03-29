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
{extends file='page.tpl'}

{block name='page_title'}
    {l s='Log in to your account' d='Shop.Theme.CustomerAccount'}
{/block}

{block name='page_content'}
    {block name='login_form_container'}
        <section class="login-form">
            <h1 class="text-center">{l s='Already Registered?' d='Shop.Theme.CustomerAccount'}</h1>
            <h3 class="text-center">{l s='Login' d='Shop.Theme.CustomerAccount'}</h3>
            {render file='customer/_partials/login-form.tpl' ui=$login_form}
        </section>
      {block name='display_after_login_form'}
            {hook h='displayCustomerLoginFormAfter'}
      {/block}
      <div class="no-account">
            <div class="content">
                <h3 class="text-center">New Customer</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more. </p>
            </div>
            <a class="btn-default active w-100 text-center" href="{$urls.pages.register}" data-link-action="display-register-form">
                {l s='CREATE AN ACCOUNT' d='Shop.Theme.CustomerAccount'}
            </a>
        </div>
    {/block}
{/block}
