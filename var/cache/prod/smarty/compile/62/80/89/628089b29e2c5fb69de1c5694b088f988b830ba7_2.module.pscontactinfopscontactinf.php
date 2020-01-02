<?php
/* Smarty version 3.1.33, created on 2020-01-02 03:36:24
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dab884df4f3_52567093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1573118291,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0dab884df4f3_52567093 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact-rich">
    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
    <div class="block">
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <div class="address section">
            <p class="info-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</p>
            <p class="info-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2'];?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
                <div class="data">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                    <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <div class="block">
            <div class="icon">
                <i class="material-icons">&#xE0DF;</i>
            </div>
            <div class="data">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <div class="block">
            <div class="data email">
                <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
            </div>
        </div>
    <?php }?>
    <div class="block contact-map">
        <iframe 
            width="100%" 
            height="240" 
            style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBwY_0PWuwH_A5y4iwNAqpaUbUjRPySkFc%0A%20%20%20%20&q=7563%20St.%20Vicent%20Place,%20Glasgow"
            allowfullscreen="">
        </iframe>
    </div>
</div>
<?php }
}
