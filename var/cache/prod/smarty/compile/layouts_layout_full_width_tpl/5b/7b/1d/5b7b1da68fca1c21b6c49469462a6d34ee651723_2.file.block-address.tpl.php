<?php
/* Smarty version 3.1.33, created on 2019-12-26 05:21:02
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\_partials\block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04898e5b64b3_33422723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7b1da68fca1c21b6c49469462a6d34ee651723' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\_partials\\block-address.tpl',
      1 => 1577355027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04898e5b64b3_33422723 (Smarty_Internal_Template $_smarty_tpl) {
?><article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="address-body">
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Addresses','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
        <div class="addresses-create-new">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address" class="btn-default">
                <i class="fa fa-plus-circle"></i>
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </a>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title">TITLE</h3>
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
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
" data-link-action="delete-address" class="btn-default btn-delete">
            <i class="fa fa-trash"></i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
" data-link-action="edit-address" class="btn-default">
            <i class="fa fa-pencil-square-o"></i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    </div>
</article>
<?php }
}
