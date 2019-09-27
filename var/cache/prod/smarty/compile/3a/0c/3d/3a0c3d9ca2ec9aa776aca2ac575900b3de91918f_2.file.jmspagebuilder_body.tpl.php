<?php
/* Smarty version 3.1.33, created on 2019-09-27 05:01:32
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\jmspagebuilder_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dcfec193024_87599955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0c3d9ca2ec9aa776aca2ac575900b3de91918f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\jmspagebuilder_body.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dcfec193024_87599955 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<div class="jms-row<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class) && $_smarty_tpl->tpl_vars['row']->value->settings->custom_class) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->custom_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>style="
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size) && $_smarty_tpl->tpl_vars['row']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) && $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) && $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) {?>background-repeat:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position) && $_smarty_tpl->tpl_vars['row']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_position,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>"
		<?php }?>>
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
}?>" style="
			<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img) && $_smarty_tpl->tpl_vars['column']->value->settings->background_img) {?>
				background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) && $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) {?>
				background-repeat:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size) && $_smarty_tpl->tpl_vars['column']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="back-to-top" id="back-to-top" title="Back to top">
	<i class="d-flex flex-center">
		<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-014"
				viewBox="0 0 24 24">
			<path d="M11.791 21.505a.598.598 0 0 1-.439-.186.601.601 0 0 1-.186-.439V4.883l-4.551 4.57a.649.649 0 0 1-.449.177.652.652 0 0 1-.449-.176.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l5.625-5.625a2.48 2.48 0 0 1 .107-.068c.032-.02.068-.042.107-.068a.736.736 0 0 1 .468 0c.039.026.075.049.107.068.032.02.068.042.107.068l5.625 5.625c.117.13.176.28.176.449a.652.652 0 0 1-.176.449.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127l-4.551-4.57V20.88a.6.6 0 0 1-.186.439.59.59 0 0 1-.437.186z"/>
		</svg>
	</i>
</div>

<?php }
}
