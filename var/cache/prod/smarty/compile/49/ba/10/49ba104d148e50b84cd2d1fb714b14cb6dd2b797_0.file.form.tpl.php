<?php
/* Smarty version 3.1.33, created on 2019-12-18 22:37:48
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsrecentlybought\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfaf08cdb28d9_08003126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ba104d148e50b84cd2d1fb714b14cb6dd2b797' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsrecentlybought\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfaf08cdb28d9_08003126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9020404985dfaf08cd8b7d4_54690903', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_9020404985dfaf08cd8b7d4_54690903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_9020404985dfaf08cd8b7d4_54690903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'multiple_select') {?>
    <div class="col-lg-9">
        <select data-placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
" multiple class="chosen-select" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['optionvalue']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['optionname']];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['input']->value['idesc'];?>
</p>
        <?php echo '<script'; ?>
 type="text/javascript">
            $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
').val([<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
]).trigger('chosen:updated');
        <?php echo '</script'; ?>
>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'number') {?>
    <div class="col-lg-9">
        <input type="number" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
" style="float:left; height: 31px; padding: 6px 8px; font-size: 12px; line-height: 1.42857; color: #555; background-color: #F5F8F9; border: 1px solid #C7D6DB; border-radius: 3px;">
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['unitname'])) {?>
        <select style="float:left; width: unset;" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['unitname'];?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['unitname']] == $_smarty_tpl->tpl_vars['option']->value['value']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['unit'])) {?>
        <div style="float:left; height: 31px; padding: 6px 8px; font-size: 12px; line-height: 1.42857; color: #555; background-color: #F5F8F9; border: 1px solid #C7D6DB; border-radius: 3px;">
            <?php echo $_smarty_tpl->tpl_vars['input']->value['unit'];?>

        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['idesc'])) {?>
        <p class="help-block" style="clear:both;"><?php echo $_smarty_tpl->tpl_vars['input']->value['idesc'];?>
</p>
        <?php }?>
    </div>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
