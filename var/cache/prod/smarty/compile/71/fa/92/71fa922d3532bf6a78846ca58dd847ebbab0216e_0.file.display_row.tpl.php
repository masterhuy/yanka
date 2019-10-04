<?php
/* Smarty version 3.1.33, created on 2019-10-03 22:49:25
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsslider\views\templates\hook\display_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96b335497566_13314467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fa922d3532bf6a78846ca58dd847ebbab0216e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsslider\\views\\templates\\hook\\display_row.tpl',
      1 => 1569318147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96b335497566_13314467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('positions', json_decode($_smarty_tpl->tpl_vars['display']->value['position'],true));?>
<div class="panel display" id="display_<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
    <div class="row">
        <div class="col-lg-1">
            #<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>

        </div>
        <div class="col-md-5" id="slider_title_<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
             <?php echo $_smarty_tpl->tpl_vars['display']->value['title'];?>

        </div>
        <div class="col-md-5">
            <ul id="list_hook_<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
" data-slider="<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'hook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
?>
                    <li data-hook="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</span><i class="icon-remove deleteHook"></i></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <select data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Hooks','d'=>'jmsslider'),$_smarty_tpl ) );?>
" multiple class="chosen-select" name="select-slider" id="select_<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
?>
                    <?php if (!in_array($_smarty_tpl->tpl_vars['hook']->value,$_smarty_tpl->tpl_vars['positions']->value)) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" ><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</option>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <a class="btn btn-default add-hook" data-slider="<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
                <i class="icon-plus"></i>
                Add
            </a>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-default deleteDisplay" data-slider="<?php echo $_smarty_tpl->tpl_vars['display']->value['id_slider'];?>
">
                Delete
            </a>
        </div>

    </div>
</div><?php }
}
