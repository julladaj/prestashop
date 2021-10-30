{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2020 silbersaiten
* @version   1.4.0
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}

<form action="{$action}" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div id="common_cookie_settings" class="panel">
        <div class="panel-heading"><i class="icon-cogs"></i> {l s='Common options' mod='cookielaw'}</div>
        <div class="panel-body">
            <div class="row">
                <div class="form-group col-xs-4">
                    <label class="control-label col-lg-3">
                        {l s='CMS Page of "More information"' mod='advancedcms'}
                    </label>
                    <div class="col-lg-9">
                        <select name="COOKIELAW_CMS_ID" class=" fixed-width-xxl" id="COOKIELAW_CMS_ID">
                            {foreach $list_cms as $page}
                                <option value="{$page.value}"
                                        {if $page.value == $COOKIELAW_CMS_ID}selected{/if}>
                                    {$page.name}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-4">
                    <label class="control-label col-lg-3">
                        {l s='Expanded use' mod='advancedcms'}
                    </label>
                    <div class="col-lg-9">
                        <div class="row">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="expanded_use" id="expanded_use_on" value="1"
                               {if $expanded_use}checked="checked"{/if}>
                        <label for="expanded_use_on">{l s='Yes' mod='cookielaw'}</label>
                        <input type="radio" name="expanded_use" id="expanded_use_off" value="0"
                               {if !$expanded_use}checked="checked"{/if}>
                        <label for="expanded_use_off">{l s='No' mod='cookielaw'}</label>
                        <a class="slide-button btn"></a>
                    </span>
                            <p class="help-block">
                                {l s='Enable or disable advanced using the module' mod='cookielaw'}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-default pull-right" name="submitCommonCookieOptions">
                <i class="process-icon-save"></i>
                {l s='Save' mod='cookielaw'}
            </button>
        </div>
    </div>
</form>
