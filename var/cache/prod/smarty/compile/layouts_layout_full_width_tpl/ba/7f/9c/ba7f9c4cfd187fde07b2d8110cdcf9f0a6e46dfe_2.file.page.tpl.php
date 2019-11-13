<?php
/* Smarty version 3.1.33, created on 2019-11-12 23:53:33
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb8c4d3ac2b9_80566900',
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
function content_5dcb8c4d3ac2b9_80566900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4974608675dcb8c4d3851b0_41916786', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4533872775dcb8c4d3851b0_08715654', 'page_content_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21185257225dcb8c4d3ac2b0_18329549', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_4974608675dcb8c4d3851b0_41916786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_4974608675dcb8c4d3851b0_41916786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_12132036315dcb8c4d3851b1_88882419 extends Smarty_Internal_Block
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
class Block_4533872775dcb8c4d3851b0_08715654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_top' => 
  array (
    0 => 'Block_4533872775dcb8c4d3851b0_08715654',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_12132036315dcb8c4d3851b1_88882419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12132036315dcb8c4d3851b1_88882419', 'customer_notifications', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'my_account_links'} */
class Block_4569711285dcb8c4d3ac2b2_40796711 extends Smarty_Internal_Block
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
class Block_21185257225dcb8c4d3ac2b0_18329549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_21185257225dcb8c4d3ac2b0_18329549',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_4569711285dcb8c4d3ac2b2_40796711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4569711285dcb8c4d3ac2b2_40796711', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
