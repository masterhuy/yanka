<?php
/* Smarty version 3.1.33, created on 2019-10-01 03:41:37
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d930331447c24_55197405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b3d2c50c90d868fa7f970a3f6a60377c99601b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\templates\\page.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d930331447c24_55197405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19525013455d930331447c26_43160617', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_409495625d930331447c24_56020231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_495838035d930331447c25_66975989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13832176135d930331447c20_58907433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_409495625d930331447c24_56020231', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495838035d930331447c25_66975989', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_3359243025d930331447c26_37206352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19525013455d930331447c26_43160617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19525013455d930331447c26_43160617',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13832176135d930331447c20_58907433',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_409495625d930331447c24_56020231',
  ),
  'page_content' => 
  array (
    0 => 'Block_495838035d930331447c25_66975989',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3359243025d930331447c26_37206352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13832176135d930331447c20_58907433', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3359243025d930331447c26_37206352', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
