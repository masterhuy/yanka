<?php
/* Smarty version 3.1.33, created on 2020-01-02 05:02:13
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dbfa5e66994_78476175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd573466f96783a4ba60709e8aa7da93334f67f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1577440104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0dbfa5e66994_78476175 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
</span>
		<i class="d-flex">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
				<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
					l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z"></path>
			</svg>
		</i>
		<span class="tooltip-wrap bottom"> 
			<span class="tooltip-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
</span> 
		</span>
	</a>
	<div id="search-form">
		<div class="modal-dialog">
			<div class="modal-content container">
				<div class="search-box">
					<div class="label-form">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What are you Looking for?','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
</p>
						<i class="d-flex" data-dismiss="modal">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
								<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
							</svg>
						</i>
					</div>
					<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" name="orderby" value="position" />
						<input type="hidden" name="orderway" value="desc" />
						<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search" />
					</form>
					<div id="search_result"></div>
				</div>	
			</div>
		</div>
	</div>
	<div class="overlay-transparent"></div>
</div>

<?php }
}
