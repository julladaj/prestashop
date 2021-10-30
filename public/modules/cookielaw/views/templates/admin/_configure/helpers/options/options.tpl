{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2018 silbersaiten
* @version   1.2.5
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}
{extends file="helpers/options/options.tpl"}
{block name="input"}
    {if $field['type'] == 'rangeslider'}
        <div class="col-lg-2">
            <div class="input-group">
                <input type="text"
                       class="form-control fixed-width-xxl range_slider_input"
                       class="{if isset($field['class'])}{$field['class']|escape:'html':'UTF-8'}{/if}"
                       {if isset($field['id'])} id="amount_{$field['id']|escape:'html':'UTF-8'}"{/if}
                       min="{$field['min']|escape:'html':'UTF-8'}"
                       max="{$field['max']|escape:'html':'UTF-8'}"
                       name="{$field['name']|escape:'html':'UTF-8'}"
                       value="{$field['value']|escape:'html':'UTF-8'}"
                       readonly
                />
                <div id="slider_{$field['id']|escape:'html':'UTF-8'}"></div>
            </div>
        </div>
        <script type="text/javascript">
            {literal}
            $("#slider_{/literal}{$field['id']|escape:'html':'UTF-8'}{literal}").slider({
                range: "min",
                min: {/literal}{$field['min']|escape:'html':'UTF-8'}{literal},
                max: {/literal}{$field['max']|escape:'html':'UTF-8'}{literal},
                value: {/literal}{$field['default']|escape:'html':'UTF-8'}{literal},
                step:{/literal}{$field['step']|escape:'html':'UTF-8'}{literal}
            });
            $("#slider_{/literal}{$field['id']|escape:'html':'UTF-8'}{literal}")
                .prev().val($("#slider_{/literal}{$field['id']|escape:'html':'UTF-8'}{literal}").slider("value"));
            {/literal}
        </script>
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
