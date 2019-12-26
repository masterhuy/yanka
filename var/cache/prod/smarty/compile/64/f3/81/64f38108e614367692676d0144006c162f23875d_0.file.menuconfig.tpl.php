<?php
/* Smarty version 3.1.33, created on 2019-12-25 23:07:28
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsvermegamenu\views\templates\admin\jmsvermegamenu_manager\menuconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e043200772691_49398118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f38108e614367692676d0144006c162f23875d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsvermegamenu\\views\\templates\\admin\\jmsvermegamenu_manager\\menuconfig.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e043200772691_49398118 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu" method="post">
<div class="menu-config">
<h3>Menu Configuration</h3>
<ul>
    <li>
		<label data-placement="top" data-original-title="Mouse Event Trigger" class="label-tooltip">Menu Trigger</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value == 'hover') {?>checked="checked"<?php }?> value="hover" id="mouseevent_on" name="JMSVMM_MOUSEEVENT">
			<label for="mouseevent_on">Hover</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value == 'click') {?>checked="checked"<?php }?> value="click" id="mouseevent_off" name="JMSVMM_MOUSEEVENT">
			<label for="mouseevent_off">Click</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Time for open and close dropdown(milisecond)" class="label-tooltip"> Duration</label>	
		<fieldset class="btn-group">
		<input type="text" name="JMSVMM_DURATION" value="<?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
" id="open-speed" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Load Bootstrap Css File" class="label-tooltip">Load Bootstrap Css</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_LOADBOOTSTRAPCSS']->value == 1) {?>checked="checked"<?php }?> value="1" id="loadbootstrap_on" name="JMSVMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_on">Yes</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSVMM_LOADBOOTSTRAPCSS']->value == 0) {?>checked="checked"<?php }?> value="0" id="loadbootstrap_off" name="JMSVMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>			
<ul>
    <li>
		<label>&nbsp;</label>	
		<fieldset class="btn-group">
		<button class="btn btn-success" name="submitConfig" id="btn-save-config" value="1" type="submit">
			Save Config
		</button>		
		</fieldset>
	</li>
</ul>
			
</div>
</form><?php }
}
