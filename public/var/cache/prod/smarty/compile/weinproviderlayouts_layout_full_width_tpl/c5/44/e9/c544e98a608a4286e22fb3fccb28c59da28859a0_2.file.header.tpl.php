<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:32
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4cd70465_34736793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c544e98a608a4286e22fb3fccb28c59da28859a0' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/themes/weinprovider/templates/_partials/header.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4cd70465_34736793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2059119435617bba4cd6d5f7_35025229', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402174168617bba4cd6deb3_53511470', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506921877617bba4cd6e4f9_43844730', 'header_top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:_partials/header.tpl');
}
/* {block 'header_banner'} */
class Block_2059119435617bba4cd6d5f7_35025229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_2059119435617bba4cd6d5f7_35025229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <div class="header-banner hidden-sm-down">
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

   </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_402174168617bba4cd6deb3_53511470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_402174168617bba4cd6deb3_53511470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <nav class="header-nav">
      <div class="container">
         <div class="row">
            <div class="hidden-sm-down">
               <div class="col-xs-12  right-nav">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

               </div>
            </div>
            <div class="hidden-md-up text-sm-center mobile">
               <div id="menu-icon">
                  <i class="material-icons d-inline">&#xE5D2;</i>
               </div>
               <div class="top-logo" id="_mobile_logo"></div>
               <div id="_mobile_user_info"></div>
               <div id="_mobile_cart"></div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1506921877617bba4cd6e4f9_43844730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1506921877617bba4cd6e4f9_43844730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <div class="header-top">
      <div class="container">
         <div class="row">
            <div class="col-lg-2 hidden-sm-down" id="_desktop_logo">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                   <h1>
                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                         <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                      </a>
                   </h1>
                <?php } else { ?>
                   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                      <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                   </a>
                <?php }?>
            </div>
            <div class="col-lg-10 col-sm-12 position-relative">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

               <div class="clearfix"></div>
            </div>
         </div>
         <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
            <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
            <div class="js-top-menu-bottom">
               <div id="_mobile_currency_selector"></div>
               <div id="_mobile_language_selector"></div>
               <div id="_mobile_contact_link"></div>
            </div>
         </div>
      </div>
   </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
