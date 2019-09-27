<?php
/* Smarty version 3.1.33, created on 2019-09-27 04:14:25
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmspagebuilder\views\templates\hook\addonpopupadvertising.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8dc4e1856dd7_27302249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb6d06d9ef4b27bfc2e585761233f4b5c584621' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\hook\\addonpopupadvertising.tpl',
      1 => 1569568109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8dc4e1856dd7_27302249 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">	
		<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
		<h2>
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

		</h2>
		<?php }?>
		<a class="popup-close">
			<i class="popup-navigation__close cursor-pointer" data-js-popup-close
				data-button-content="close">
				<svg aria-hidden="true" focusable="false" role="presentation"
						class="icon icon-theme-164" viewBox="0 0 24 24">
					<path d="M19.583 4.965a.65.65 0 0 1-.176.449l-6.445 6.426 6.445 6.426c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-6.426-6.445-6.426 6.445a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l6.445-6.426-6.445-6.426a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176l6.426 6.445 6.426-6.445a.652.652 0 0 1 .449-.176c.169 0 .319.059.449.176.117.13.176.28.176.449z"/>
				</svg>
			</i>
		</a>
		<div class="jms-popup-content">
			<i class="d-flex flex-center">
				<svg aria-hidden="true" focusable="false" role="presentation"
					class="icon icon-theme-153" viewBox="0 0 24 24">
					<path d="M22.072 4.807c.013.026.02.049.02.068v.068c.013.026.02.046.02.059v13.75c0 .17-.062.316-.186.439a.601.601 0 0 1-.439.186H2.736a.598.598 0 0 1-.439-.186.598.598 0 0 1-.186-.439V5.002c0-.013.006-.032.02-.059v-.068c0-.019.006-.042.02-.068a.125.125 0 0 0 .029-.049.444.444 0 0 1 .029-.068.145.145 0 0 0 .02-.059c.013 0 .022-.003.029-.01a.04.04 0 0 0 .01-.029l.038-.039a.214.214 0 0 1 .059-.039l.039-.039c.013-.013.032-.02.059-.02a.125.125 0 0 1 .049-.029.184.184 0 0 1 .049-.01c.026-.013.049-.02.068-.02s.042-.006.068-.02H21.525c.026.014.049.02.068.02s.042.007.068.02c.013 0 .029.004.049.01.02.007.036.017.049.029.026 0 .045.007.059.02l.039.039a.286.286 0 0 1 .059.039l.039.039c0 .014.003.023.01.029.006.007.016.01.029.01 0 .014.006.033.02.059a.587.587 0 0 0 .039.068.102.102 0 0 1 .019.049zm-1.211 13.32V6.232l-8.379 6.152a.57.57 0 0 1-.176.088.659.659 0 0 1-.566-.088L3.361 6.232v11.895h17.5zM4.65 5.627l7.461 5.469 7.461-5.469H4.65z"/>
				</svg>
			</i>
			<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>


			<div class="dontshow">
				<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" /> 
				<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Don't show this popup again",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
			</div>		
			<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		</div>	
	</div>
</div><?php }
}
