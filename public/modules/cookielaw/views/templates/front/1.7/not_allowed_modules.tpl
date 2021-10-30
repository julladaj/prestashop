{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2020 silbersaiten
* @version   1.4.5
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}

{extends file='page.tpl'}

{block name='page_title'}
    <span>{l s='Not allowed blocks' mod='cookielaw'}</span>
{/block}

{block name='page_content'}
    <div id="cookielaw_not_allowed">
        {foreach $modules as $module}
            <div class="cookielaw_customer_item">
                <h3>{$module.module_name}</h3>
                <p><small>{$module.module_description}</small></p>
            </div>
        {/foreach}
        <div>
            <form action="{$cookie_law_action}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="cookie_law_customer_clear"/>
                <button class="btn btn-primary">{l s='Clear the saved data' mod='cookielaw'}</button>
            </form>
        </div>
    </div>
{/block}
