{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2020 silbersaiten
* @version   1.4.8
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}

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
                <form action="{$cookie_law_action}" method="post" enctype="multipart/form-data" class="cookie_law_dialog_form">
                    <h1>{l s='Cookie settings' mod='cookielaw'}</h1>
                    <p>
                        {l s='We use cookies to make it easier for you to use the website, to make our products available to you as well as personalized offers other companies.' mod='cookielaw'}
                        {l s='You decide,  which cookies you allow or reject.' mod='cookielaw'}
                        {l s='You can change your decision at any time. Further information also in our' mod='cookielaw'}
                        <a class="cookie_law_privacy_modal fancybox.iframe" href="{$cookielaw_cms}" target="_blank">{l s='Privacy policy' mod='cookielaw'}</a>.
                    </p>
                    <div class="row cookie_law_action_row">
                        <div class="col-md-6">
                            <a id="cookie_law_container_trigger" href="#">
                                {l s='Open details' mod='cookielaw'}
                                <i class="material-icons">expand_more</i>
                            </a>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <button class="btn btn-primary cookie_select_all cookie_send_confirmation">{l s='Select all and confirm' mod='cookielaw'}</button>
                        </div>
                    </div>
                    <div id="cookie_law_categories_container" class="cookie_law_categories" style="display: none">
                            <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                <label>
                                    <img class="checkbox_disabled_image" src="{$module_path}/views/img/checkbox.jpg" width="21" height="21">
                                    <span class="checkbox_disabled_image_label">{l s='Technically essential' mod='cookielaw'}</span>
                                </label>
                                <span class="cookie_law_trigger_button">{l s='Details' mod='cookielaw'}</span>
                            </div>
                            <div class="cookie_law_details">
                                <p>
                                    {l s='Technically required cookies help us to improve the operation of the website and to to make this possible.' mod='cookielaw'}
                                    {l s='They provide basic functions, such as the display and selection of products, filling the shopping cart or login safe and are therefore a prerequisite to use the site.' mod='cookielaw'}
                                </p>
                                <p>
                                    {l s='In order to save your desired website settings, we set a cookie.' mod='cookielaw'}
                                    {l s='This saves your individual  Consent to the use of all or individual cookies.' mod='cookielaw'}
                                    {l s='Our website uses accordingly only the technical and the cookies you have confirmed.' mod='cookielaw'}
                                </p>
                            </div>
                            {if isset($list_of_group[1]) && count($list_of_group[1])}
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_comfort" value="1">
                                        {l s='Comfort' mod='cookielaw'}
                                    </label>
                                    <span class="cookie_law_trigger_button">{l s='Details' mod='cookielaw'}</span>
                                </div>
                                <div class="cookie_law_details">
                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th>{l s='Name' mod='cookielaw'}</th>
                                                <th>{l s='Purpose' mod='cookielaw'}</th>
                                            </tr>
                                            {foreach $list_of_group[1] as $module}
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_1_{$module.id_module}" value="{$module.id_module}"></td>
                                                    <td><label for="cookie_law_1_{$module.id_module}">{$module.module_name}</label></td>
                                                    <td><label for="cookie_law_1_{$module.id_module}">{$module.module_description}</label></td>
                                                </tr>
                                            {/foreach}
                                        </table>
                                    <p>
                                        {l s='With functional cookies to increase the user comfort, the display of the  website can be improved.' mod='cookielaw'}
                                        {l s='Also they facilitate the use of the website for you.' mod='cookielaw'}
                                    </p>
                                </div>
                            {/if}
                            {if isset($list_of_group[2]) && count($list_of_group[2])}
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_statistic_partnership" value="1">
                                        {l s='Statistics & partnerships' mod='cookielaw'}
                                    </label>
                                    <span class="cookie_law_trigger_button">{l s='Details' mod='cookielaw'}</span>
                                </div>
                                <div class="cookie_law_details">

                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th>{l s='Name' mod='cookielaw'}</th>
                                                <th>{l s='Purpose' mod='cookielaw'}</th>
                                            </tr>
                                            {foreach $list_of_group[2] as $module}
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_2_{$module.id_module}" value="{$module.id_module}"></td>
                                                    <td><label for="cookie_law_2_{$module.id_module}">{$module.module_name}</label></td>
                                                    <td><label for="cookie_law_2_{$module.id_module}">{$module.module_description}</label></td>
                                                </tr>
                                            {/foreach}
                                        </table>

                                    <p>
                                        <strong>{l s='Partnerships' mod='cookielaw'}</strong>
                                    </p>
                                    <p>
                                        {l s='We cooperate with selected partners in order to provide you with personalized content suitable for show your interests or to evaluate, track and account for joint campaigns.' mod='cookielaw'}
                                    </p>
                                    <p>
                                        <strong>{l s='Statistics' mod='cookielaw'}</strong>
                                    </p>
                                    <p>
                                        {l s='We use cookies for statistical purposes, with which we can monitor the use of our website and analyze it for you optimize.' mod='cookielaw'}
                                    </p>
                                </div>
                            {/if}
                            {if isset($list_of_group[3]) && count($list_of_group[3])}
                                <div class="cookie_law_controls col-md-3 col-sm-6 col-xs-12">
                                    <label>
                                        <input type="checkbox" class="cookie_law_main_selector" name="cookie_law_promotion" value="1">
                                        {l s='Promotion' mod='cookielaw'}
                                    </label>
                                    <span class="cookie_law_trigger_button">{l s='Details' mod='cookielaw'}</span>
                                </div>
                                <div class="cookie_law_details">

                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th>{l s='Name' mod='cookielaw'}</th>
                                                <th>{l s='Purpose' mod='cookielaw'}</th>
                                            </tr>
                                            {foreach $list_of_group[3] as $module}
                                                <tr>
                                                    <td><input type="checkbox" name="module_ids[]" id="cookie_law_3_{$module.id_module}" value="{$module.id_module}"></td>
                                                    <td><label for="cookie_law_3_{$module.id_module}">{$module.module_name}</label></td>
                                                    <td><label for="cookie_law_3_{$module.id_module}">{$module.module_description}</label></td>
                                                </tr>
                                            {/foreach}
                                        </table>

                                    <p>
                                        {l s='In order to provide you with individual product and service offers also outside of our website to be able to display, set we use cookies for an extended customer approach.' mod='cookielaw'}
                                        {l s='These can be used by others to advertise companies are read out in order to display personalized content to you.' mod='cookielaw'}
                                    </p>
                                    <p>
                                        {l s='Please note that for the use of your data beyond our processing, your Data the responsibility lies with these companies and it is done without our participation.' mod='cookielaw'}
                                    </p>
                                </div>
                            {/if}
                        <div class="cookie_law_footer col-md-12 col-xs-12">
                            <div class="cookie_law_buttons">
                                <input type="hidden" name="cookie_law_customer_confirm"/>
                                <button class="btn btn-secondary cookie_send_configuration cookie_send_confirmation">{l s='Confirm selection' mod='cookielaw'}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
