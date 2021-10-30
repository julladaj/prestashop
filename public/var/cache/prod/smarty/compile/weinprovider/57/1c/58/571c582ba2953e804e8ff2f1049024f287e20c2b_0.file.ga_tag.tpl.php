<?php
/* Smarty version 3.1.39, created on 2021-10-29 11:09:30
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bba4abb1793_81168303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571c582ba2953e804e8ff2f1049024f287e20c2b' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1635496044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bba4abb1793_81168303 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    <?php echo '</script'; ?>
>
    
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['jsState']->value != 1 && $_smarty_tpl->tpl_vars['isBackoffice']->value === true)) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        ga('send', 'pageview');
    <?php echo '</script'; ?>
>
    
<?php }
}
}
