<?php
/* Smarty version 3.1.39, created on 2021-10-30 03:05:06
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617c9a425804b8_04445578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f5a16bf2ad17645450686efe8498f0b43849cf' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/footer.tpl',
      1 => 1635515798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617c9a425804b8_04445578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
   <div class="row">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399335137617c9a4257e887_89332256', 'hook_footer_before');
?>

   </div>
</div>
<div class="footer-container">
   <div class="container">
      <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718732335617c9a4257f2e8_65159571', 'hook_footer');
?>

      </div>
      <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_473128246617c9a4257fc89_75603849', 'hook_footer_after');
?>

      </div>
   </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_1399335137617c9a4257e887_89332256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1399335137617c9a4257e887_89332256',
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
class Block_1718732335617c9a4257f2e8_65159571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_1718732335617c9a4257f2e8_65159571',
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
class Block_473128246617c9a4257fc89_75603849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_473128246617c9a4257fc89_75603849',
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
