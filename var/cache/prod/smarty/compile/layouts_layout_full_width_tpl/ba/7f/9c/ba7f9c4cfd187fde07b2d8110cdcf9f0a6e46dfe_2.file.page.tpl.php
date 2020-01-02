<?php
/* Smarty version 3.1.33, created on 2020-01-02 04:59:11
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dbeef7f2942_00822787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7f9c4cfd187fde07b2d8110cdcf9f0a6e46dfe' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\customer\\page.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_5e0dbeef7f2942_00822787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10143527215e0dbeef7cb846_84391689', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15656070275e0dbeef7cb848_03814950', 'page_content_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8707376295e0dbeef7f2948_75935298', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_10143527215e0dbeef7cb846_84391689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_10143527215e0dbeef7cb846_84391689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_8670030985e0dbeef7cb844_99478247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_15656070275e0dbeef7cb848_03814950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_top' => 
  array (
    0 => 'Block_15656070275e0dbeef7cb848_03814950',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_8670030985e0dbeef7cb844_99478247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8670030985e0dbeef7cb844_99478247', 'customer_notifications', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'my_account_links'} */
class Block_17372600065e0dbeef7f2942_86966135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_8707376295e0dbeef7f2948_75935298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_8707376295e0dbeef7f2948_75935298',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_17372600065e0dbeef7f2942_86966135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17372600065e0dbeef7f2942_86966135', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
