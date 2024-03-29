<?php
/* Smarty version 3.1.33, created on 2019-11-11 03:08:27
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc916fb746d43_28999139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '398a01900f4d6cf86662af00f918b37d4904287d' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1572341609,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc916fb746d43_28999139 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_yanka/themes/jms_yanka/modules/productcomments/views/templates/hook/confirm-modal.tpl -->
<?php $_smarty_tpl->_assignInScope('icon', (($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'check_circle' : $tmp));
$_smarty_tpl->_assignInScope('modal_message', (($tmp = @$_smarty_tpl->tpl_vars['modal_message']->value)===null||$tmp==='' ? '' : $tmp));?>

<?php echo '<script'; ?>
 type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const confirmModal = $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
');
        confirmModal.on('hidden.bs.modal', function () {
        confirmModal.modal('hide');
        confirmModal.trigger('modal:confirm', false);
        });

        $('.confirm-button', confirmModal).click(function() {
            confirmModal.trigger('modal:confirm', true);
        });
        $('.refuse-button', confirmModal).click(function() {
            confirmModal.trigger('modal:confirm', false);
        });
    });
<?php echo '</script'; ?>
>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_title']->value, ENT_QUOTES, 'UTF-8');?>

                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12  col-sm-12" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
-message">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_message']->value, ENT_QUOTES, 'UTF-8');?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12  col-sm-12 post-comment-buttons">
                        <button type="button" class="btn-default" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                        </button>
                        <button type="button" class="btn-default" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end D:\xamppp\htdocs\jms_yanka/themes/jms_yanka/modules/productcomments/views/templates/hook/confirm-modal.tpl --><?php }
}
