<?php
/* Smarty version 3.1.33, created on 2019-11-14 23:22:44
  from 'D:\xamppp\htdocs\jms_yanka\modules\jmsslider\views\templates\hook\script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dce2814818969_82799871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c3bc4cf3baa3a75efc7c04fac75eb4b3b93080' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\modules\\jmsslider\\views\\templates\\hook\\script.tpl',
      1 => 1569318147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dce2814818969_82799871 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(window).load(function(){
        $('.slider').each(function() {
            $(this).fractionSlider({
                'slideTransition' : $(this).attr('data-slideTransition'),
                'slideEndAnimation' : ($(this).attr('data-slideEndAnimation') == "1")?true:false,
                'transitionIn' : $(this).attr('data-transitionIn'),
                'transitionOut' : $(this).attr('data-transitionOut'),
                'fullWidth' : ($(this).attr('data-fullWidth') == "1")?true:false,
                'delay' : $(this).attr('data-delay'),
                'timeout' : $(this).attr('data-timeout'),
                'speedIn' : $(this).attr('data-speedIn'),
                'speedOut' : $(this).attr('data-speedOut'),
                'easeIn' : $(this).attr('data-easeIn'),
                'easeOut' : $(this).attr('data-easeOut'),
                'controls' : ($(this).attr('data-controls') == "1")?true:false,
                'pager' : ($(this).attr('data-pager') == "1")?true:false,
                'autoChange' : ($(this).attr('data-autoChange') == "1")?true:false,
                'pauseOnHover' : ($(this).attr('data-pauseOnHover') == "1")?true:false,
                'backgroundAnimation' : ($(this).attr('data-backgroundAnimation') == "1")?true:false,
                'backgroundEase' : $(this).attr('data-backgroundEase'),
                'responsive' : ($(this).attr('data-responsive') == "1")?true:false,
                'dimensions' : $(this).attr('data-dimensions'),
                'mobile_height' : $(this).attr('data-mobile_height'),
                'mobile2_height' : $(this).attr('data-mobile2_height'),
                'tablet_height' : $(this).attr('data-tablet_height'),
            })
        });
    });
<?php echo '</script'; ?>
><?php }
}
