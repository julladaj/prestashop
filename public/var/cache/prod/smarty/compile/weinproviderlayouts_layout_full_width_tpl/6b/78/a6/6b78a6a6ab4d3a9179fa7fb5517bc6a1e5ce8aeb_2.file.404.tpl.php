<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:32
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4cd3b6b8_16980478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b78a6a6ab4d3a9179fa7fb5517bc6a1e5ce8aeb' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/classic/templates/errors/404.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_617bba4cd3b6b8_16980478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_904007192617bba4cd3a472_91221123', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078811129617bba4cd3acf1_00798564', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_904007192617bba4cd3a472_91221123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_904007192617bba4cd3a472_91221123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_1078811129617bba4cd3acf1_00798564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1078811129617bba4cd3acf1_00798564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
