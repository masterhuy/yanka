<?php
/* Smarty version 3.1.33, created on 2020-01-02 22:26:27
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\_partials\block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0eb463659b94_52441918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7b1da68fca1c21b6c49469462a6d34ee651723' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\_partials\\block-address.tpl',
      1 => 1577422305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0eb463659b94_52441918 (Smarty_Internal_Template $_smarty_tpl) {
?><article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="address-body">
        <div class="address-top">
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Addresses','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
            <div class="addresses-create-new">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address" class="btn-default">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" class="btn-link btn-lg pt-link-back">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                    <g>
                        <polygon fill="currentColor" points="16.4,21.6 6.9,12 16.4,2.4 17.6,3.6 9.1,12 17.6,20.4"></polygon>
                    </g>
                </svg>
                <span class="pt-text">Return To Account Page</span>
            </a>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
            <div class="pt-table-responsive">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 </td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['address1'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr>
                            <td>Address 2:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['address2'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['country'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr>
                            <td>Postcode:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['postcode'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="address-footer">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
" data-link-action="edit-address" class="btn-edit btn-link btn-lg pt-link-back">
            <svg width="28" height="28" viewBox="0 0 24 24">
                <use xlink:href="#icon-edit">
                    <symbol id="icon-edit" viewBox="0 0 24 24">
                        <path d="M2.3 20.4c-.1 0-.1 0 0 0H2c-.1 0-.1-.1-.2-.1-.1-.1-.1-.2-.1-.3v-.3l.6-5v-.1s0-.1.1-.1L14.6 2.1c.4-.4.8-.5 1.4-.5.5 0 1 .2 1.3.5l2.6 2.6c.4.4.5.8.5 1.3s-.2 1-.5 1.3L7.7 19.6s-.1 0-.1.1h-.1l-5.2.7zm.6-1.3l2.9-.4-2.6-2.6-.3 3zm.8-4.3L5 16.1l9.7-9.7L13.5 5l-9.8 9.8zm3.5 3.5L17 8.5l-1.3-1.3L5.9 17l1.3 1.3zM15.5 3l-1.2 1.2 3.5 3.5L19 6.5c.1-.1.2-.3.2-.4 0-.2-.1-.3-.2-.4L16.4 3c-.1-.1-.3-.2-.4-.2-.2 0-.4 0-.5.2z" fill="currentColor">
                        </path>
                    </symbol>
                </use>
            </svg>
            <span class="pt-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
" data-link-action="delete-address" class="btn-delete btn-link btn-lg pt-link-back">
            <svg width="28" height="28" viewBox="0 0 24 24">
                <use xlink:href="#icon-remove">
                    <symbol id="icon-remove" fill="none" viewBox="0 0 24 24">
                        <path d="M5.754 23.2L4.848 7.8h14.304l-.906 15.4H5.754zM2 4h20M10 1h4" stroke="currentColor" stroke-widht="1.6">
                        </path>
                    </symbol>
                </use>
            </svg>
            <span class="pt-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    </div>
</article>
<?php }
}
