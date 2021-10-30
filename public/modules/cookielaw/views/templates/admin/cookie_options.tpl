{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2020 silbersaiten
* @version   1.4.6
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}

<form action="{$action}" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div id="advanced_cookie_settings" class="panel">
        <div class="panel-heading"><i class="icon-cogs"></i> {l s='Cookie options' mod='cookielaw'}</div>
        <div class="panel-body">

            <h1>{l s='List of modules to be distributed.' mod='cookielaw'}</h1>
            <p>{l s='Try dragging from one list to another. The item you drag will be cloned and the clone will stay in the original list.' mod='cookielaw'}</p>
            <div class="row">
                <div class=" col-lg-6">
                    <div id="contained_module_container" class="list-group">
                        {foreach $list_of_modules as $module}
                            <div class="list-group-item">
                                <h4>
                                    <span class="module_icon_container"><img src="{$modules_dir}{$module->name}/logo.png"/></span>
                                    <span>{$module->displayName}</span>
                                    <div class="module_name_row row hidden">
                                        {foreach $languages as $language}
                                            {if $languages|count > 1}
                                                <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                <div class="col-lg-9">
                                            {/if}
                                            <input
                                                    disabled="disabled"
                                                    type="text"
                                                   name="module_name_{$module->id}_{$language.id_lang}"
                                                   id="module_name_{$module->id}_{$language.id_lang}"
                                                   onkeyup="if (isArrowKey(event)) return; updateFriendlyURL();"
                                                   value="{$module->displayName}"
                                            >
                                            {if $languages|count > 1}
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown">
                                                        {$language.iso_code}
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        {foreach from=$languages item=language}
                                                            <li>
                                                                <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                   tabindex="-1">{$language.name}</a>
                                                            </li>
                                                        {/foreach}
                                                    </ul>
                                                </div>
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <i class="icon-pencil module_name_edit"></i>
                                </h4>
                                <small>
                                    <span>{$module->description}</span>
                                    <div class="module_description_row row hidden">
                                        {foreach $languages as $language}
                                            {if $languages|count > 1}
                                                <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                <div class="col-lg-9">
                                            {/if}
                                            <textarea
                                                    disabled="disabled"
                                                    name="module_description_{$module->id}_{$language.id_lang}"
                                                    id="module_description_{$module->id}_{$language.id_lang}"
                                            >{$module->description}</textarea>
                                            {if $languages|count > 1}
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown">
                                                        {$language.iso_code}
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        {foreach from=$languages item=language}
                                                            <li>
                                                                <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                   tabindex="-1">{$language.name}</a>
                                                            </li>
                                                        {/foreach}
                                                    </ul>
                                                </div>
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <i class="icon-pencil module_description_edit"></i>
                                </small>
                                <input type="hidden" name="modules_ids[]" value="{$module->id}" disabled="disabled"/>
                            </div>
                        {/foreach}
                    </div>
                    <h1>{l s='Full modules list (without cookie signatures)' mod='cookielaw'}</h1>
                    <div id="full_list_module_container" class="list-group">
                        {foreach $full_list_of_modules as $module}
                            <div class="list-group-item">
                                <h4>
                                    <span class="module_icon_container"><img src="{$modules_dir}{$module->name}/logo.png"/></span>
                                    <span>{$module->displayName}</span>
                                    <div class="module_name_row row hidden">
                                        {foreach $languages as $language}
                                            {if $languages|count > 1}
                                                <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                <div class="col-lg-9">
                                            {/if}
                                            <input
                                                    disabled="disabled"
                                                    type="text"
                                                   name="module_name_{$module->id}_{$language.id_lang}"
                                                   id="module_name_{$module->id}_{$language.id_lang}"
                                                   onkeyup="if (isArrowKey(event)) return; updateFriendlyURL();"
                                                   value="{$module->displayName}"
                                            >
                                            {if $languages|count > 1}
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown">
                                                        {$language.iso_code}
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        {foreach from=$languages item=language}
                                                            <li>
                                                                <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                   tabindex="-1">{$language.name}</a>
                                                            </li>
                                                        {/foreach}
                                                    </ul>
                                                </div>
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <i class="icon-pencil module_name_edit"></i>
                                </h4>
                                <small>
                                    <span>{$module->description}</span>
                                    <div class="module_description_row row hidden">
                                        {foreach $languages as $language}
                                            {if $languages|count > 1}
                                                <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                <div class="col-lg-9">
                                            {/if}
                                            <textarea
                                                    disabled="disabled"
                                                    name="module_description_{$module->id}_{$language.id_lang}"
                                                    id="module_description_{$module->id}_{$language.id_lang}"
                                            >{$module->description}</textarea>
                                            {if $languages|count > 1}
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown">
                                                        {$language.iso_code}
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        {foreach from=$languages item=language}
                                                            <li>
                                                                <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                   tabindex="-1">{$language.name}</a>
                                                            </li>
                                                        {/foreach}
                                                    </ul>
                                                </div>
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <i class="icon-pencil module_description_edit"></i>
                                </small>
                                <input type="hidden" name="modules_ids[]" value="{$module->id}" disabled="disabled"/>
                            </div>
                        {/foreach}
                    </div>

                </div>
                <div class="col-lg-6">
                    {foreach $list_by_group as $key => $group}
                        {if $key == 1}
                            <h2>{l s='Comfort' mod='cookielaw'}</h2>
                        {elseif $key == 2}
                            <h2>{l s='Statistics & partnerships' mod='cookielaw'}</h2>
                        {elseif $key == 3}
                            <h2>{l s='Promotion' mod='cookielaw'}</h2>
                        {/if}
                        <div class="module_selected_container">
                            <div id="module_group_{$key}" class="list-group">
                                {foreach $group as $item}
                                    <div class="list-group-item">
                                        <h4>
                                            <span class="module_icon_container"><img src="{$modules_dir}{$item['name']}/logo.png"/></span>
                                            <span>{$item['displayName']}</span>
                                            <div class="module_name_row row hidden">
                                                {foreach $languages as $language}
                                                    {if $languages|count > 1}
                                                        <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                        <div class="col-lg-9">
                                                    {/if}
                                                    <input type="text"
                                                           name="module_name_{$item['id_module']}_{$language.id_lang}"
                                                           id="module_name_{$item['id_module']}_{$language.id_lang}"
                                                           onkeyup="if (isArrowKey(event)) return; updateFriendlyURL();"
                                                           value="{$item.names_lang[$language.id_lang]['module_name']}"
                                                    >
                                                    {if $languages|count > 1}
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                                    data-toggle="dropdown">
                                                                {$language.iso_code}
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                {foreach from=$languages item=language}
                                                                    <li>
                                                                        <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                           tabindex="-1">{$language.name}</a>
                                                                    </li>
                                                                {/foreach}
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    {/if}
                                                {/foreach}
                                            </div>
                                            <i class="icon-pencil module_name_edit"></i>
                                        </h4>
                                        <small>
                                            <span>{$item['description']}</span>
                                            <div class="module_description_row row hidden">
                                                {foreach $languages as $language}
                                                    {if $languages|count > 1}
                                                        <div class="translatable-field lang-{$language.id_lang}"{if $language.id_lang != $current_language} style="display:none;"{/if}>
                                                        <div class="col-lg-9">
                                                    {/if}
                                                    <textarea
                                                            name="module_description_{$item['id_module']}_{$language.id_lang}"
                                                            id="module_description_{$item['id_module']}_{$language.id_lang}"
                                                    >{$item.names_lang[$language.id_lang]['module_description']}</textarea>
                                                    {if $languages|count > 1}
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
                                                                    data-toggle="dropdown">
                                                                {$language.iso_code}
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                {foreach from=$languages item=language}
                                                                    <li>
                                                                        <a href="javascript:hideOtherLanguage({$language.id_lang});"
                                                                           tabindex="-1">{$language.name}</a>
                                                                    </li>
                                                                {/foreach}
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    {/if}
                                                {/foreach}
                                            </div>
                                            <i class="icon-pencil module_description_edit"></i>
                                        </small>
                                        <input type="hidden" name="module_group_{$key}[]" value="{$item['id_module']}"/>
                                    </div>
                                {/foreach}
                            </div>
                            <div class="example">
                                {l s='Drag & drop here' mod='cookielaw'}
                            </div>
                        </div>
                    {/foreach}
                    {if !isset($list_by_group[1])}
                        <h2>{l s='Comfort' mod='cookielaw'}</h2>
                        <div class="module_selected_container">
                            <div id="module_group_1" class="list-group">

                            </div>
                            <div class="example">
                                {l s='Drag & drop here' mod='cookielaw'}
                            </div>
                        </div>
                    {/if}
                    {if !isset($list_by_group[2])}
                        <h2>{l s='Statistics & partnerships' mod='cookielaw'}</h2>
                        <div class="module_selected_container">
                            <div id="module_group_2" class="list-group">

                            </div>
                            <div class="example">
                                {l s='Drag & drop here' mod='cookielaw'}
                            </div>
                        </div>
                    {/if}
                    {if !isset($list_by_group[3])}
                        <h2>{l s='Promotion' mod='cookielaw'}</h2>
                        <div class="module_selected_container">
                            <div id="module_group_3" class="list-group">

                            </div>
                            <div class="example">
                                {l s='Drag & drop here' mod='cookielaw'}
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-default pull-right" name="submitAdvancedCookieOptions">
                <i class="process-icon-save"></i>
                {l s='Save' mod='cookielaw'}
            </button>
        </div>
    </div>
</form>
