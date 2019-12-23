<?php
/* Smarty version 3.1.33, created on 2019-12-22 22:34:11
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsvermegamenu\views\templates\admin\jmsvermegamenu_manager\menulist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0035b3eaac62_15326345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ead3ed757e762ff45a389679f812c324f8df8c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsvermegamenu\\views\\templates\\admin\\jmsvermegamenu_manager\\menulist.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0035b3eaac62_15326345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="note row">
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Drap &amp; Drop Menu Item to Change Order.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use Collapse tool to Collapse Menu. It will be easy when change order.</p>	
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Use Checkbox and Tools On right Side when want to Change State/Remove more items.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use <strong>Collapse All</strong> and <strong>Check All</strong> When you want Collapse all item and check to all checkbox.</p>	
</div>
<div class="panel">
<h3>
  <i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu List','d'=>'Modules.JmsVermegamenu'),$_smarty_tpl ) );?>

	<span class="pull-right check-all">
		<input type="checkbox" onclick="checkAll(this)" title="Check All" value="" name="checkall-toggle">&nbsp;&nbsp;Check / UnCheck All
	</span>
	<span class="collapse-expand-all pull-right">
		<i class="icon-caret-down"></i>&nbsp;&nbsp;Collapse / Expand All
	</span>
</h3>
	<form name="adminForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu" method="post">
		<div id="jms-toolbar">				
				<a class="jms-tool btn-success" onclick="submitform('add','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu&addMenu');" title="Add New Menu">
					<i class="icon-plus"></i>
				</a>
				<a class="jms-tool btn-info" onclick="submitform('edit','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu');" title="Edit Menu">
					<i class="icon-edit"></i>
				</a>
				<a class="jms-tool btn-warning" onclick="submitform('deleteMenu','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu');" title="Delete Menus">
					<i class="icon-trash"></i>	
				</a>
				<a class="jms-tool btn-success" onclick="submitform('cStatus','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu&cStatus&status=1');" title="Enabled">
					<i class="icon-check"></i>
				</a>
				<a class="jms-tool btn-danger" onclick="submitform('cStatus','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu&cStatus&status=0');" title="Disabled">
					<i class="icon-remove"></i>
				</a>			 	
		</div>
		<div class="menus_container">
		<div id="menus">						
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>																
				<?php $_smarty_tpl->_assignInScope('n', intval($_smarty_tpl->tpl_vars['k']->value)+1);?>				
				<?php if ($_smarty_tpl->tpl_vars['n']->value >= count($_smarty_tpl->tpl_vars['menus']->value)) {?>		
					<?php $_smarty_tpl->_assignInScope('nextmenu', NULL);?>
					
				<?php } else { ?>	
					<?php $_smarty_tpl->_assignInScope('nextmenu', $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->tpl_vars['n']->value]);?>
				<?php }?>
				<div id="menus_<?php echo $_smarty_tpl->tpl_vars['menu']->value['mitem_id'];?>
" >					
					<div class="panel lvl<?php echo $_smarty_tpl->tpl_vars['menu']->value['level'];?>
">
						<div class="row">
							<div class="col-lg-2">
								<input type="checkbox" class="jms-checkbox" title="Checkbox" onclick="isChecked(this);" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['mitem_id'];?>
" name="cid[]" id="cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							</div>
							<div class="col-md-5">				
								<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>

							</div>
							<div class="col-md-2">	
								<?php echo $_smarty_tpl->tpl_vars['menu']->value['type'];?>

							</div>						
							<div class="col-md-3">							
								<div class="btn-group-action pull-right">			
									<?php if ($_smarty_tpl->tpl_vars['menu']->value['level'] < $_smarty_tpl->tpl_vars['nextmenu']->value['level']) {?>
									<a class="btn btn-default collapse-expand" title="Collapse / Expand">
										<i class="icon-caret-down"></i>
									</a>
									<?php }?>	
									<a class="btn <?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>" onclick="cStatus('cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu',<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?>0<?php } else { ?>1<?php }?>)" title="<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
										<i class="<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i>
									</a>		
									<a class="btn btn-default"
										href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu&editMenu&mitem_id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['mitem_id'];?>
" title="Edit">
										<i class="icon-edit"></i>									
									</a>
									<a class="btn btn-default"
										onclick="cRemove('cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsvermegamenuManager');?>
&configure=jmsvermegamenu')">
										<i class="icon-trash"></i>									
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php if ($_smarty_tpl->tpl_vars['menu']->value['level'] < $_smarty_tpl->tpl_vars['nextmenu']->value['level']) {?>
					<div class="jms-submenu jms-submenu<?php echo $_smarty_tpl->tpl_vars['nextmenu']->value['level'];?>
">				
				<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['level'] > $_smarty_tpl->tpl_vars['nextmenu']->value['level']) {?>
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['level']-$_smarty_tpl->tpl_vars['nextmenu']->value['level'] == 1) {?>
						</div></div></div>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['level']-$_smarty_tpl->tpl_vars['nextmenu']->value['level'] == 2) {?>	
						</div></div></div></div></div>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['level']-$_smarty_tpl->tpl_vars['nextmenu']->value['level'] == 3) {?>		
						</div></div></div></div></div></div></div>
					<?php }?>
				<?php } else { ?>	
					</div>		
				<?php }?>					
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" value="" name="boxchecked">
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$('#menus').sortable( {
	connectWith: '#menus',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl0",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/jmsvermegamenu/ajax_jmsvermegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}				
});
$('.jms-submenu1').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl1",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/jmsvermegamenu/ajax_jmsvermegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu2').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl2",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/jmsvermegamenu/ajax_jmsvermegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu3').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl3",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/jmsvermegamenu/ajax_jmsvermegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
<?php echo '</script'; ?>
><?php }
}
