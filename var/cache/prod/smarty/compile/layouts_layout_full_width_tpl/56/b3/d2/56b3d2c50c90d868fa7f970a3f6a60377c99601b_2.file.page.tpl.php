<?php
/* Smarty version 3.1.33, created on 2020-01-06 04:21:00
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e12fbfc5eb089_38366771',
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
function content_5e12fbfc5eb089_38366771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18954451285e12fbfc5e3384_34501036', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_8879557095e12fbfc5e3385_17532753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1407385255e12fbfc5e7200_50017806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18215078845e12fbfc5e3381_31669392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8879557095e12fbfc5e3385_17532753', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407385255e12fbfc5e7200_50017806', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_19108261365e12fbfc5e7208_11521386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18954451285e12fbfc5e3384_34501036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18954451285e12fbfc5e3384_34501036',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18215078845e12fbfc5e3381_31669392',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8879557095e12fbfc5e3385_17532753',
  ),
  'page_content' => 
  array (
    0 => 'Block_1407385255e12fbfc5e7200_50017806',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19108261365e12fbfc5e7208_11521386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18215078845e12fbfc5e3381_31669392', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19108261365e12fbfc5e7208_11521386', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
