<?php
/* Smarty version 3.1.33, created on 2019-10-07 05:47:51
  from 'module:blockreassuranceviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9b09c7547ad1_75702178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ffc009d1b66ea89054a8e253403b7d3a67d8150' => 
    array (
      0 => 'module:blockreassuranceviewstemp',
      1 => 1569568109,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9b09c7547ad1_75702178 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['elements']->value) {?>
  <div id="block-reassurance">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
        <li>
          <div class="block-reassurance-item">
      			<span class="reassurance-img">
      				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
">
      			</span>
            <span class="h6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }?>

       
<?php }
}
