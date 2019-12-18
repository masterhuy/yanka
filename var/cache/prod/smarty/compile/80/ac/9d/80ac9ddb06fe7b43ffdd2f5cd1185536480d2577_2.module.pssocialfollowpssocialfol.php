<?php
/* Smarty version 3.1.33, created on 2019-12-18 04:56:28
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df9f7cc7c2a61_24283806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1574224996,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df9f7cc7c2a61_24283806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7604413675df9f7cc7b6ee3_07007137', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_7604413675df9f7cc7b6ee3_07007137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_7604413675df9f7cc7b6ee3_07007137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-social col-lg-4 col-md-12 col-sm-12">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
                <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                        <span class="hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'facebook') {?>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'twitter') {?>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'youtube') {?>
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'googleplus') {?>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'pinterest') {?>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'vimeo') {?>
                            <i class="fa fa-vimeo" aria-hidden="true"></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['social_link']->value['class'] == 'instagram') {?>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        <?php }?>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php
}
}
/* {/block 'block_social'} */
}
