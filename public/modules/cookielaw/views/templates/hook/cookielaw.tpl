{**
* cookielaw
*
* @category  Module
* @author    silbersaiten <info@silbersaiten.de>
* @support   silbersaiten <support@silbersaiten.de>
* @copyright 2019 silbersaiten
* @version   1.2.8
* @link      http://www.silbersaiten.de
* @license   See joined file licence.txt
*}
<script>
    var cookielaw_animation_type = {$cookielaw_animation_type|escape:'html':'UTF-8'};
    var cookielaw_ps_version = "{$version|escape:'html':'UTF-8'}";
    var cookielaw_color_img_path = "{$color_img_path|escape:'html':'UTF-8'}";
</script>
<div class="cookielaw-alert {$cookielaw_class|escape:'htmlall':'UTF-8'}"
     style="{$cookielaw_style|escape:'htmlall':'UTF-8'}">
    <div class="cookielaw-alert-container">
        <p class="cookielaw-alert-text" style="{$cookielaw_text_style|escape:'htmlall':'UTF-8'}">
            {$cookielaw_text|escape:'htmlall':'UTF-8'}
        </p>
        {if (cookielaw_cms != '')}
            <a href="{$cookielaw_cms|escape:'html':'UTF-8'}"
               style="{$cookielaw_button_style|escape:'htmlall':'UTF-8'}"
               class="btn btn-primary cookielaw-more-information">
                <span>{$cookielaw_button_text|escape:'html':'UTF-8'}</span>
            </a>
        {/if}
        <a class="btn btn-primary cookielaw-alert-close"
           style="{$cookielaw_close_button_background_color|escape:'htmlall':'UTF-8'}
           {$cookielaw_close_button_text_color|escape:'htmlall':'UTF-8'}"
        >
            <span>{$cookielaw_close_button_text|escape:'html':'UTF-8'}</span>
        </a>
    </div>
</div>
