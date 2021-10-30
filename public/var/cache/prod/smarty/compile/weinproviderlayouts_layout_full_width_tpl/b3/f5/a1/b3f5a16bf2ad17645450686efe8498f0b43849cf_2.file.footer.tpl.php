<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:32
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4cdd0f84_11033670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f5a16bf2ad17645450686efe8498f0b43849cf' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/footer.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4cdd0f84_11033670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
   <div class="row">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1373272451617bba4cdcfd67_71008994', 'hook_footer_before');
?>

   </div>
</div>
<div class="footer-container">
   <div class="container">
      <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026715576617bba4cdd0412_18364003', 'hook_footer');
?>

      </div>
      <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2040051208617bba4cdd0a42_90023414', 'hook_footer_after');
?>

      </div>
   </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_1373272451617bba4cdcfd67_71008994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1373272451617bba4cdcfd67_71008994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

       <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_1026715576617bba4cdd0412_18364003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_1026715576617bba4cdd0412_18364003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2040051208617bba4cdd0a42_90023414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2040051208617bba4cdd0a42_90023414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_footer_after'} */
}
