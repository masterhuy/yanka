<?php
/* Smarty version 3.1.33, created on 2019-11-25 03:06:00
  from 'D:\xamppp\htdocs\jms_yanka\themes\jms_yanka\modules\jmsproductvideo\views\templates\hook\videocontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb8b686e9920_16334085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed4b016b4c14f17673673228f240c39db5846df' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\themes\\jms_yanka\\modules\\jmsproductvideo\\views\\templates\\hook\\videocontent.tpl',
      1 => 1573697227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb8b686e9920_16334085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	.jms-popup-wrap {
		width : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
		height : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
px;				
	}
</style>

<?php if ($_smarty_tpl->tpl_vars['product_videos']->value) {?>
<div class="jms-videos" id="jmsproductvideo">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>	
		<div class="jms-video <?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>popup-active<?php }?>">
			<div class="addon-title">
				<h3>
										<i class="d-i-flex align-items-center">
						<svg>
							<use xlink:href="#icon-youtube">
								<symbol id="icon-youtube" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.824 8.263c-.105-.741-.357-1.355-.756-1.841-.386-.498-.96-.827-1.722-.984a22.231 22.231 0 0 0-2.04-.256 46.926 46.926 0 0 0-3.673-.164L12 5l-.65.018a47.334 47.334 0 0 0-3.656.164c-.739.061-1.419.146-2.04.256-.761.157-1.341.486-1.74.984-.387.486-.633 1.1-.738 1.841a22.252 22.252 0 0 0-.158 2.443L3 12l.018 1.313c.011.862.064 1.67.158 2.424.105.741.351 1.361.738 1.86.398.485.979.807 1.74.965.621.11 1.301.195 2.04.256.738.06 1.423.103 2.056.127a158.5 158.5 0 0 0 1.6.055h1.283c.433-.012.967-.03 1.6-.055a46.865 46.865 0 0 0 2.074-.127 22.252 22.252 0 0 0 2.039-.256c.761-.158 1.336-.48 1.722-.966.399-.498.65-1.118.756-1.859.094-.754.147-1.562.158-2.425L21 12l-.018-1.294a22.235 22.235 0 0 0-.158-2.443zM9.75 15.5v-7l5.625 3.5-5.625 3.5z" fill="currentColor"></path>
								</symbol>
							</use>
						</svg>
					</i>
				</h3>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>
				<div class="jms-popup-box">				
					<div class="jms-popup-wrap">						
						<a class="popup_close"><i class="fa fa-close"></i></a>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>
							<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
							<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video_link']->value,(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
							<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
								<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>			
					</div>
					<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
				</div>	
			<?php } else { ?>			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>				
					<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
						<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video']->value['link'],(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
						<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			<?php }?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
