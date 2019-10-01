<?php
/* Smarty version 3.1.33, created on 2019-10-01 05:27:50
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d931c16124631_98297825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1781de42a3fdb07dff0b6a0b90e1930120471f4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\index.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d931c16124631_98297825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12066697365d931c160fd535_22389632', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15323292395d931c160fd530_33063259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19733372015d931c160fd533_01004791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12066697365d931c160fd535_22389632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12066697365d931c160fd535_22389632',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15323292395d931c160fd530_33063259',
  ),
  'page_content' => 
  array (
    0 => 'Block_19733372015d931c160fd533_01004791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15323292395d931c160fd530_33063259', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19733372015d931c160fd533_01004791', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
