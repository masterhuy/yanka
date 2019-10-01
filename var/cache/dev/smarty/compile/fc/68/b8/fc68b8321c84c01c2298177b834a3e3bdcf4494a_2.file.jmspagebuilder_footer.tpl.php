<?php
/* Smarty version 3.1.33, created on 2019-10-01 03:23:04
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\jmspagebuilder_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d92fed8b1e628_42418037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc68b8321c84c01c2298177b834a3e3bdcf4494a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\jmspagebuilder_footer.tpl',
      1 => 1569830262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d92fed8b1e628_42418037 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<div class="jms-row<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class) && $_smarty_tpl->tpl_vars['row']->value->settings->custom_class) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->custom_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>style="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');<?php }
if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size) && $_smarty_tpl->tpl_vars['row']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) && $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position) && $_smarty_tpl->tpl_vars['row']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_position,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid) && $_smarty_tpl->tpl_vars['row']->value->settings->fluid == '0') {?>
			<div class="container">
		<?php } else { ?>
			<div class="container-fluid">
		<?php }?>
		<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'column', false, 'cindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cindex']->value => $_smarty_tpl->tpl_vars['column']->value) {
?>
			<div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->className,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->custom_class) && $_smarty_tpl->tpl_vars['column']->value->settings->custom_class) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->custom_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" style="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img) && $_smarty_tpl->tpl_vars['column']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');<?php }
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size) && $_smarty_tpl->tpl_vars['column']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) && $_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_attachment,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_position) && $_smarty_tpl->tpl_vars['column']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_position,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value->addons, 'addon', false, 'aindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aindex']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
					<div class="addon-box">
						<?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['settingpanel']->value) {?>
<div id="jmstools" class="jmsclose hidden-xs hidden-sm">
	<a id="jmstools-arrow" class="pull-right">
		<i class="d-flex cog">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-301"
					viewBox="0 0 24 18">
				<path d="M13.065 5.949L12.27 5.8c-.868-.183-1.23-1.181-.669-1.839l.526-.587c.435-.497.37-1.183-.132-1.546l-.874-.71C10.6.7 9.884.761 9.503 1.241l-.525.587c-.562.657-1.688.442-1.975-.346L6.735.747C6.525.17 5.858-.139 5.254.061l-1.1.365c-.605.201-.928.838-.717 1.416l.248.683c.287.788-.456 1.624-1.324 1.44l-.774-.095c-.665-.133-1.248.296-1.351.86L.01 5.806c-.084.617.31 1.192.92 1.343l.794.15c.849.13 1.23 1.18.65 1.786l-.526.587c-.435.497-.37 1.183.131 1.546l.875.71c.521.417 1.238.355 1.619-.124l.545-.534c.561-.658 1.687-.443 1.974.346l.268.735c.21.578.877.887 1.482.686l1.1-.365c.604-.2.927-.838.716-1.416l-.248-.683c-.287-.788.457-1.624 1.324-1.44l.794.148c.664.133 1.248-.296 1.35-.86l.225-1.076c.065-.67-.33-1.245-.94-1.396zM7.763 8.651c-1.21.401-2.543-.216-2.964-1.372-.42-1.156.225-2.43 1.434-2.832 1.21-.401 2.544.216 2.964 1.372.42 1.156-.225 2.43-1.434 2.832z"
						fill="#fff"/>
				<path d="M23.184 11.825l-.681-.132c-.746-.16-1.06-1.026-.58-1.593l.45-.507c.371-.43.313-1.023-.118-1.339l-.753-.618c-.449-.361-1.064-.31-1.389.104l-.45.506c-.48.568-1.446.378-1.695-.305l-.232-.637c-.182-.501-.755-.77-1.274-.598l-.942.313a.95.95 0 0 0-.611 1.223l.215.592c.249.683-.386 1.405-1.132 1.244l-.665-.086c-.57-.117-1.07.253-1.156.741l-.19.93a1.06 1.06 0 0 0 .794 1.166l.682.131c.728.116 1.06 1.027.563 1.549l-.45.506c-.371.43-.314 1.023.118 1.34l.753.617c.449.361 1.064.31 1.388-.104l.467-.46c.48-.568 1.446-.379 1.695.304l.232.638c.182.501.756.77 1.274.598l.942-.313a.95.95 0 0 0 .611-1.223l-.215-.592c-.248-.684.387-1.405 1.132-1.244l.682.131c.57.117 1.07-.253 1.156-.74l.19-.931c.053-.58-.287-1.08-.81-1.211zm-4.542 2.324c-1.036.344-2.183-.195-2.547-1.196-.365-1.002.185-2.104 1.222-2.448 1.037-.344 2.183.194 2.548 1.196.364 1.002-.186 2.103-1.223 2.447z"
						fill="#fff"/>
			</svg>
		</i>
		<i class="d-flex close-cog">
			<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-164"
					viewBox="0 0 24 24">
				<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"/>
			</svg>
		</i>
	</a>
	<div id="setting-overlay"></div>
	<div id="jmstools-content" class="pull-left">
		<form action="index.php" method="POST">
			<?php if (count($_smarty_tpl->tpl_vars['themeskins']->value) > 0) {?>
			<div class="form-group">
				<label class="form-label">Theme Skin</label>
					<a class="skin-box <?php if ($_smarty_tpl->tpl_vars['jpb_skin']->value == 'default' || $_smarty_tpl->tpl_vars['jpb_skin']->value == '') {?>active<?php }?>" title="Default">
					<img src="themes/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['themename']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/skin-icons/default.png" alt="Default" />
					</a>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themeskins']->value, 'sk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sk']->value) {
?>
					<a class="skin-box <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['sk']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['jpb_skin']->value == $_prefixVariable1) {?>active<?php }?>" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-color="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<img src="themes/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['themename']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/skin-icons/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.png" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
					</a>					
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php }?>	
			<?php if (isset($_smarty_tpl->tpl_vars['homepages']->value) && count($_smarty_tpl->tpl_vars['homepages']->value) > 1) {?>
			<div class="form-group">
					<label>Home Page</label>
					<select name="jpb_homepage" id="jmshomepage">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepages']->value, 'hp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hp']->value) {
?>
						<option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hp']->value['id_homepage'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hp']->value['id_homepage'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['jpb_homepage']->value == $_prefixVariable2) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hp']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>					
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
					</select>
			</div>
			<?php }?>			
			<?php if (isset($_smarty_tpl->tpl_vars['producthovers']->value)) {?>
			<div class="form-group">
					<label>Product Box Hover</label>
					<select name="jpb_phover" id="jmsphover">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producthovers']->value, 'ph', false, 'phkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phkey']->value => $_smarty_tpl->tpl_vars['ph']->value) {
?>
						<option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phkey']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phkey']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['jpb_phover']->value == $_prefixVariable3) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ph']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>					
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
					</select>
			</div>
			<?php }?>		
			<div class="form-group">		
				<label>Product Box Color Pick</label>	
				<select name="jpb_pcolor">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['jpb_pcolor']->value == '1') {?>selected="selected"<?php }?>>Show</option>										
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['jpb_pcolor']->value == '0') {?>selected="selected"<?php }?>>Hide</option>										
				</select>				
			</div>
			<div class="form-group">		
				<label>Direction</label>	
				<select name="jpb_rtl">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value == '0') {?>selected="selected"<?php }?>>LTR</option>										
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value == '1') {?>selected="selected"<?php }?>>RTL</option>										
				</select>				
			</div>
			<input id="jmsskin" type="hidden" name="jpb_skin" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['jpb_skin']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			
			<div class="form-group btn-action">
				<button type="submit" class="btn-default active" name="apply" value="1">Apply</button>
				<a class="btn-default active" href="index.php?settingreset=1">Reset</a>
			</div>
			<input type="hidden" name="settingpanel" value="1" />
		</form>	
	</div>
</div>
<?php }
}
}
