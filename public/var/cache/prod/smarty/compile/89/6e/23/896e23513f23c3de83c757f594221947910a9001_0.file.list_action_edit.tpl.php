<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:30
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/backoffice/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4ac174a8_23030421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '896e23513f23c3de83c757f594221947910a9001' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/backoffice/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1635496043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4ac174a8_23030421 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}