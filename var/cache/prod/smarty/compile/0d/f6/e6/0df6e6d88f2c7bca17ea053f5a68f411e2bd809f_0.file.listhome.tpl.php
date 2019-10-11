<?php
/* Smarty version 3.1.33, created on 2019-10-11 03:25:12
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmspagebuilder\views\templates\admin\jmspagebuilder_homepages\listhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da02e584f1cd4_62423895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df6e6d88f2c7bca17ea053f5a68f411e2bd809f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmspagebuilder\\views\\templates\\admin\\jmspagebuilder_homepages\\listhome.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da02e584f1cd4_62423895 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel"><h3><i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HomePages List','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&addHome=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="rows">
		<div id="homepage_list" class="homepage">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepages']->value, 'homepage', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['homepage']->value) {
?>
				<div id="homepage_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
 - <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['title'],'html','UTF-8' ));?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&status_id_homepage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['homepage']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"									href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&config_id_homepage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
">
									<i class="icon-sitemap"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Config','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"									href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&duplicate_id_homepage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
">
									<i class="icon-copy"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

								</a>	
								<a class="btn btn-default"	href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&edit_id_homepage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
">
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

								</a>								
								<a class="btn btn-default"									href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderHomepages'),'html','UTF-8' ));?>
&configure=jmspagebuilder&delete_id_homepage=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['id_homepage'],'html','UTF-8' ));?>
" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="icon-trash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

								</a>								
							</div>
						</div>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div><?php }
}
