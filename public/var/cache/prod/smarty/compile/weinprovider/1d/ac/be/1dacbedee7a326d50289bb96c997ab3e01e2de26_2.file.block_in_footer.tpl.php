<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:32
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/cookielaw/views/templates/hook/block_in_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4cdea4a6_65588784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dacbedee7a326d50289bb96c997ab3e01e2de26' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/cookielaw/views/templates/hook/block_in_footer.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4cdea4a6_65588784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="cookielaw">
	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cookielaw','account'),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not allowed modules','mod'=>'cookielaw'),$_smarty_tpl ) );?>
">
		<span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not allowed modules','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
	</a>
</li>
<?php }
}
