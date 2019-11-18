<?php
/* Smarty version 3.1.33, created on 2019-11-18 03:39:27
  from 'D:\xamppp\htdocs\jms_yanka\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd258bf5b0fc1_21328144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37d99aa5af36d1a96a861b036f603c6fd9f4d24' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_yanka\\pdf\\invoice.shipping-tab.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd258bf5b0fc1_21328144 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
