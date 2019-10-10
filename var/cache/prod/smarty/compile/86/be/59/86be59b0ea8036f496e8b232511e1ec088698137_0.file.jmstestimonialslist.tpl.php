<?php
/* Smarty version 3.1.33, created on 2019-10-10 06:13:08
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmstestimonials\views\templates\hook\jmstestimonialslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f0434bf6640_70394896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86be59b0ea8036f496e8b232511e1ec088698137' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmstestimonials\\views\\templates\\hook\\jmstestimonialslist.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f0434bf6640_70394896 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<h3><i class="icon-list-ul"></i> 
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Testimonial list','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl ) );?>

		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&addTes=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
		</span>
	</h3>
	<?php echo '<script'; ?>
>
			$(document).ready(function(){
				$('.toogle').click(function(e){
					$('#slidesContent').toggle(200);
				});
				$('.panel-heading').click(function(e){
					$(this).next('.form-wrapper').toggle(200);
				});
			});
				
	<?php echo '</script'; ?>
>
	<div id="slidesContent">
		<div id="slides">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
?>
				<div id="slides_1" class="panel slideContent_">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
						
							<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;
echo $_smarty_tpl->tpl_vars['testimonial']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
" class="img-thumbnail" />
							<?php }?>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left"> #<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
- <?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
</h4>							
							<div class="btn-group-action pull-right">								
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&changeStatus&status_id_testimonial=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
" title="title="<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>"">
									<i class="<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&id_testimonial=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
"
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&delete_id_tes=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
">
									<i class="icon-trash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl ) );?>

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
