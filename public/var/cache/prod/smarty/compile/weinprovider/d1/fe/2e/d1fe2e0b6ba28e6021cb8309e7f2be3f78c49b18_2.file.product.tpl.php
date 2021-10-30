<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:10:11
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/modules/ps_emailalerts/views/templates/hook/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba73517211_06618718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1fe2e0b6ba28e6021cb8309e7f2be3f78c49b18' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/modules/ps_emailalerts/views/templates/hook/product.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba73517211_06618718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tabs">
    <form>
        <div class="js-mailalert" style="text-align:center;" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'actions','params'=>array('process'=>'add')),$_smarty_tpl ) );?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['email']->value)) && $_smarty_tpl->tpl_vars['email']->value) {?>
                <input class="form-control" type="email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl ) );?>
"/><br />
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            <?php }?>
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <button class="btn btn-primary btn-block" type="submit" rel="nofollow" onclick="return addNotification();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notify me when available','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl ) );?>
</button>
            <p style="padding:5px 0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'*) if available again','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl ) );?>
</p>
        </div>
    </form>
</div>
<?php }
}
