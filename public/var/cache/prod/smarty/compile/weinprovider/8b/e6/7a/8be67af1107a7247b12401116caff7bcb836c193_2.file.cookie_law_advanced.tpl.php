<?php
/* Smarty version 3.1.39, created on 2021-10-29 16:04:57
  from '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/cookielaw/views/templates/hook/cookie_law_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bff89ebbf46_82478257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be67af1107a7247b12401116caff7bcb836c193' => 
    array (
      0 => '/var/www/vhosts/dev.data-horizon.de/order-der-weinprovider.dev.data-horizon.de/public/modules/cookielaw/views/templates/hook/cookie_law_advanced.tpl',
      1 => 1635515798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bff89ebbf46_82478257 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div class="cookie_law_reveal_overlay"></div>
    <div class="cookie_law_reveal_dialog container">
        <span class="cookie_law_close_button">
             <span class="cookie_law_close_button_container">
                <span class="cookie_law_close_btn_leftright"></span>
                <span class="cookie_law_close_btn_rightleft"></span>
            </span>
        </span>
        <div class="cookie_law_container">
            <div class="cookie_law_dialog_content">
                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cookie_law_action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="cookie_law_dialog_form">
                    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cookie settings','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</h1>
                    <p>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We use cookies to make it easier for you to use the website, to make our products available to you as well as personalized offers other companies.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You decide,  which cookies you allow or reject.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can change your decision at any time. Further information also in our','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                        <a class="cookie_law_privacy_modal fancybox.iframe" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cookielaw_cms']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Privacy policy','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</a>.
                    </p>
                    <div class="row cookie_law_action_row">
                        <div class="col-md-6">
                            <a id="cookie_law_container_trigger" href="#">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open details','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                <i class="material-icons">expand_more</i>
                            </a>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <button class="btn btn-primary cookie_select_all cookie_send_confirmation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select all and confirm','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</button>
                        </div>
                    </div>
                    <div id="cookie_law_categories_container" class="cookie_law_categories" style="display: none">
                            <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                <label>
                                    <img class="checkbox_disabled_image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_path']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/checkbox.jpg" width="21" height="21">
                                    <span class="checkbox_disabled_image_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technically essential','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
                                </label>
                                <span class="cookie_law_trigger_button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
                            </div>
                            <div class="cookie_law_details">
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technically required cookies help us to improve the operation of the website and to to make this possible.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'They provide basic functions, such as the display and selection of products, filling the shopping cart or login safe and are therefore a prerequisite to use the site.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                </p>
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to save your desired website settings, we set a cookie.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This saves your individual  Consent to the use of all or individual cookies.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our website uses accordingly only the technical and the cookies you have confirmed.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                </p>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['list_of_group']->value[1])) && count($_smarty_tpl->tpl_vars['list_of_group']->value[1])) {?>
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_comfort" value="1">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comfort','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </label>
                                    <span class="cookie_law_trigger_button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
                                </div>
                                <div class="cookie_law_details">
                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Purpose','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_of_group']->value[1], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_1_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"></td>
                                                    <td><label for="cookie_law_1_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_name'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                    <td><label for="cookie_law_1_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With functional cookies to increase the user comfort, the display of the  website can be improved.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Also they facilitate the use of the website for you.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </p>
                                </div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['list_of_group']->value[2])) && count($_smarty_tpl->tpl_vars['list_of_group']->value[2])) {?>
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_statistic_partnership" value="1">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics & partnerships','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </label>
                                    <span class="cookie_law_trigger_button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
                                </div>
                                <div class="cookie_law_details">

                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Purpose','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_of_group']->value[2], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"></td>
                                                    <td><label for="cookie_law_2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_name'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                    <td><label for="cookie_law_2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>

                                    <p>
                                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partnerships','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</strong>
                                    </p>
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We cooperate with selected partners in order to provide you with personalized content suitable for show your interests or to evaluate, track and account for joint campaigns.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </p>
                                    <p>
                                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</strong>
                                    </p>
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We use cookies for statistical purposes, with which we can monitor the use of our website and analyze it for you optimize.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </p>
                                </div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['list_of_group']->value[3])) && count($_smarty_tpl->tpl_vars['list_of_group']->value[3])) {?>
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_promotion" value="1">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promotion','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </label>
                                    <span class="cookie_law_trigger_button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</span>
                                </div>
                                <div class="cookie_law_details">

                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Purpose','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_of_group']->value[3], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_3_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"></td>
                                                    <td><label for="cookie_law_3_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_name'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                    <td><label for="cookie_law_3_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['id_module'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['module_description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>

                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to provide you with individual product and service offers also outside of our website to be able to display, set we use cookies for an extended customer approach.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'These can be used by others to advertise companies are read out in order to display personalized content to you.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </p>
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note that for the use of your data beyond our processing, your Data the responsibility lies with these companies and it is done without our participation.','mod'=>'cookielaw'),$_smarty_tpl ) );?>

                                    </p>
                                </div>
                            <?php }?>
                        <div class="cookie_law_footer col-md-12 col-xs-12">
                            <div class="cookie_law_buttons">
                                <input type="hidden" name="cookie_law_customer_confirm"/>
                                <button class="btn btn-secondary cookie_send_configuration cookie_send_confirmation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm selection','mod'=>'cookielaw'),$_smarty_tpl ) );?>
</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
