<?php
/* Smarty version 3.1.33, created on 2019-11-12 23:53:15
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb8c3b45fb23_93628670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907005c3b24ba3afab57bbca7cabbc0925f65197' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\authentication.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb8c3b45fb23_93628670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19958486095dcb8c3b45fb24_04291618', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20194831575dcb8c3b45fb24_83532041', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_19958486095dcb8c3b45fb24_04291618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_19958486095dcb8c3b45fb24_04291618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_17449653085dcb8c3b45fb25_22996996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_2235238445dcb8c3b45fb20_19476576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <h3 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</h3>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17449653085dcb8c3b45fb25_22996996', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
          <h2 class="h3 text-center">Sign Up</h2>
            <div class="mb-35">
                <p class="mb-15">Enjoy The Benefits Of Registering:</p>
                <ul class="mb-0">
                    <li>Order: view Order History, track and manage purchases and returns.</li>
                    <li>Address Book and Card Wallet: safely store delivery and payment details for faster
                        checkout
                    </li>
                    <li>Saved for later: wish list your preferred items and track their availability</li>
                </ul>
            </div>
          <a class="btn-default w-100 text-center" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up now!','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_20194831575dcb8c3b45fb24_83532041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_20194831575dcb8c3b45fb24_83532041',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_2235238445dcb8c3b45fb20_19476576',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_17449653085dcb8c3b45fb25_22996996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2235238445dcb8c3b45fb20_19476576', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
