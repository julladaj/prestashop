<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:32
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4cdcc0d0_10485455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c712a5c23d4758f86cd89db4bb3459607a3d1f' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/classic/templates/errors/not-found.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4cdcc0d0_10485455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782153442617bba4cdcabb2_64367860', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_1907150040617bba4cdcb3e0_93369981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_1710411342617bba4cdcba05_88132746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_1782153442617bba4cdcabb2_64367860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1782153442617bba4cdcabb2_64367860',
  ),
  'search' => 
  array (
    0 => 'Block_1907150040617bba4cdcb3e0_93369981',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_1710411342617bba4cdcba05_88132746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907150040617bba4cdcb3e0_93369981', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710411342617bba4cdcba05_88132746', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
