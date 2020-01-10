<?php
/* Smarty version 3.1.33, created on 2020-01-10 04:59:54
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e184b1a641107_20979933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da18f35cf30edf86575b43114e0c96957e4c082' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\errors\\page-not-found.tpl',
      1 => 1572922382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e184b1a641107_20979933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="pt-empty-layout">
				<h2 class="pt-title-02"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error 404','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
...</h2>
				<h1 class="pt-title pt-size-large"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page Not Found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
				<p>
					We looked everywhere for this page. Are you sure the website URL is correct?
					Go to the <strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="pt-link pt-color-base">main page</a></strong> or select suitable category.
				</p>
			</div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_557064535e184b1a63d282_66097362', 'hook_not_found');
?>

        </div>
    </div>
</section>

<?php }
/* {block 'hook_not_found'} */
class Block_557064535e184b1a63d282_66097362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_557064535e184b1a63d282_66097362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_not_found'} */
}
