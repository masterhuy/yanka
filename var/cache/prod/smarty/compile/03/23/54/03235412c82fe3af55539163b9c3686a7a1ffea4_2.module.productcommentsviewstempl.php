<?php
/* Smarty version 3.1.33, created on 2019-12-03 04:50:33
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de62fe93a82e3_04589957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1572319961,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de62fe93a82e3_04589957 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <span>Based on <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
 reviews</span>
  </div>
<?php }
}
}
