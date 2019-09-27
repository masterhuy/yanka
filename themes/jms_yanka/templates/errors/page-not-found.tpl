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
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>404</h1>
            <p class="text-1">{l s='Page Not Found' d='Shop.Theme.Global'}</p>
            <p class="text-2">{l s='We looked everywhere for this page.Are you sure the website URL is correct? Get in touch with the site owner.' d='Shop.Theme.Global'}</p>
            
            <a class="btn-default back-to-home" href="{$urls.base_url}">{l s='Go back' d='Shop.Theme.Global'}</a>
        
            {block name='hook_not_found'}
                {hook h='displayNotFound'}
            {/block}
        </div>
    </div>
</section>
