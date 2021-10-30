<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.4.8
 * @link      http://www.silbersaiten.de
 *
 */

require_once(dirname(__FILE__) . '/classes/CookieLawHelper.php');

class Cookielaw extends Module
{
    private $ps_v = '1.7';
    public $tabs = array(
        array(
            'name' => 'CookieLaw settings',
            'class_name' => 'AdminCookieLaw',
            'visible' => true,
            'parent_class_name' => 'CONFIGURE',
            'icon' => 'account_balance'
        ));

    public function __construct()
    {
        $this->name = 'cookielaw';
        $this->tab = 'front_office_features';
        $this->version = '1.4.8';
        $this->author = 'silbersaiten';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array(
            'min' => '1.6.0.0',
            'max' => _PS_VERSION_
        );
        $this->bootstrap = true;
        $this->ps_v = substr(_PS_VERSION_, 0, 3);

        parent::__construct();

        $this->displayName = $this->l('CookieLaw');
        $this->description = $this->l('Adds a fixed line with custom text about the cookie law that needs to be agreed to');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        $this->module_key = 'fbd30e6e8bca4e31f692044b308c181f';
    }

    public function install()
    {
        include(dirname(__FILE__) . '/install/install.php');

        $return = true;
        $return &= parent::install();
        if (version_compare(_PS_VERSION_, '1.7', '<')) {
            $return &= $this->registerHook('displayFooter');
        } else {
            $return &= $this->registerHook('footer');
        }
        $return &= $this->registerHook('displayHeader');
        $return &= $this->registerHook('displayBackOfficeHeader');
        $return &= $this->registerHook('displayCustomerAccount');
        $return &= $this->registerHook('displayMyAccountBlock');
        $return &= $this->registerHook('displayMyAccountBlockFooter');

        $translate = array();
        $xml = simplexml_load_file($this->local_path . "translations.xml");

        foreach ($xml->item as $value) {
            $translate[(string)$value->lang] = (string)$value->text;
        }

        $to_config = array();
        foreach (Language::getLanguages() as $lang) {
            if (isset($translate[$lang['iso_code']])) {
                $to_config[$lang['id_lang']] = str_replace(
                    '[shop_name]',
                    Tools::safeOutput(Configuration::get('PS_SHOP_NAME', null, null, null)),
                    $translate[$lang['iso_code']]
                );
            }
        }

        $button_lang = array();
        foreach (Language::getLanguages() as $item) {
            $button_lang[$item['id_lang']] = $this->l('More information');
        }

        $button_close_lang = array();
        foreach (Language::getLanguages() as $item) {
            $button_close_lang[$item['id_lang']] = $this->l('OK');
        }

        $return &= Configuration::updateValue('COOKIELAW_TEXT', $to_config);
        $return &= Configuration::updateValue('COOKIELAW_BUTTON_TEXT', $button_lang);
        $return &= Configuration::updateValue('COOKIELAW_CLOSE_BUTTON_TEXT', $button_close_lang);
        $return &= $this->addTab();
        return $return;
    }

    public function uninstall()
    {
        Configuration::deleteByName('COOKIELAW_TEXT');
        Configuration::deleteByName('COOKIELAW_CMS_ID');
        Configuration::deleteByName('COOKIELAW_BLOCK_OPACITY');
        Configuration::deleteByName('COOKIELAW_FONT_SIZE');
        Configuration::deleteByName('COOKIELAW_POSITION');
        Configuration::deleteByName('COOKIELAW_ANIMATION_TYPE');
        Configuration::deleteByName('COOKIELAW_BACKGROUND_COLOR');
        Configuration::deleteByName('COOKIELAW_TEXT_COLOR');
        Configuration::deleteByName('COOKIELAW_BUTTON_TEXT');
        Configuration::deleteByName('COOKIELAW_BUTTON_BACKGROUND_COLOR');
        Configuration::deleteByName('COOKIELAW_BUTTON_TEXT_COLOR');
        Configuration::deleteByName('COOKIELAW_CLOSE_BUTTON_TEXT');
        Configuration::deleteByName('COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR');
        Configuration::deleteByName('COOKIELAW_CLOSE_BUTTON_TEXT_COLOR');
        $this->removeTab();
        return parent::uninstall();
    }

    public function reset()
    {
        return true;
    }

    private function addTab()
    {
        $tab = new Tab();
        $tab->module = $this->name;
        $tab->active = true;
        $tab->class_name = 'AdminCookieLaw';
        $tab->id_parent = (int)Tab::getIdFromClassName('CONFIGURE');
        $tab->icon = 'account_balance';

        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = 'CookieLaw settings';
        }

        return $tab->add();
    }

    private function removeTab()
    {
        $tab = Tab::getInstanceFromClassName('AdminCookieLaw');
        return $tab->delete();
    }

    public function getContent()
    {
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminCookieLaw'));
    }

    public function hookDisplayBackOfficeHeader()
    {
        if ($this->context->controller instanceof AdminCookieLawController) {
            $this->context->controller->addJquery();
            $this->context->controller->addJqueryUI('ui.slider');
            $this->context->controller->addJS($this->getPathUri() . '/views/js/cookielaw_admin.js');
            $this->context->controller->addJS($this->getPathUri() . '/views/lib/SortableJS/Sortable.js');
            $this->context->controller->addJS($this->getPathUri() . '/views/lib/SortableJS/jquery-sortable.js');
            $this->context->controller->addCSS($this->getPathUri() . '/views/css/cookielaw_admin.css');
        }
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addJqueryPlugin('fancybox');
        if ($this->ps_v == '1.6') {
            $this->context->controller->addCSS($this->_path . '/views/css/cookielaw.css');
            $this->context->controller->addJS($this->_path . '/views/js/cookielaw.js');
        } else {
            $this->context->controller->registerJavascript(
                'modules-' . $this->name . '-front',
                'modules/' . $this->name . '/views/js/cookielaw.js',
                array('position' => 'bottom', 'priority' => 150)
            );
            $this->context->controller->registerStylesheet(
                'modules-' . $this->name . '-front',
                'modules/' . $this->name . '/views/css/cookielaw.css',
                array('media' => 'all', 'priority' => 150)
            );
        }
    }

    public function hookFooter()
    {
        return $this->hookDisplayFooter();
    }

    public function hookDisplayFooter()
    {
        $this->context->smarty->assign(array(
            'cookielaw_cms' => (int)Configuration::get('COOKIELAW_CMS_ID') != 0
                ? $this->context->link->getCMSLink((int)Configuration::get('COOKIELAW_CMS_ID'))
                : '',
        ));

        if ((int)Configuration::get('COOKIE_LAW_ADVANCED_ENABLED')) {
            if ($this->context->cookie->__isset('cookie_law_blocked_modules')) {
                return false;
            }

            $modules = CookieLawHelper::getCookieLawOptions();
            $list_of_group = array();
            $list_of_modules = array();

            foreach ($modules as $module) {
                $names_lang = CookieLawHelper::getModuleLangNames($module['id_module'], $this->context->shop->id);

                if (isset($names_lang[$this->context->language->id]) && count($names_lang[$this->context->language->id])) {
                    $module['module_name'] = $names_lang[$this->context->language->id]['module_name'];
                    $module['module_description'] = $names_lang[$this->context->language->id]['module_description'];
                    $list_of_modules[$module['id_module']] = Module::getInstanceById($module['id_module']);
                    $list_of_group[$module['id_module_group']][] = $module;
                }
            }

            $this->context->smarty->assign(array(
                'module_path' => _MODULE_DIR_ . $this->name,
                'list_of_group' => $list_of_group,
                'list_of_modules' => $list_of_modules,
                'cookie_law_action' => $this->context->link->getModuleLink($this->name, 'account'),
            ));
            return $this->display(__FILE__, 'cookie_law_advanced.tpl');
        } else {
            $this->assignTemplateVariables();
            return $this->display(__FILE__, 'cookielaw.tpl');
        }
    }

    public function hookDisplayCustomerAccount()
    {
        $this->context->smarty->assign('module_link', $this->context->link->getModuleLink('cookielaw', 'account'));
        return $this->display(__FILE__, ($this->ps_v == '1.7' ? '1.7/' : '') . 'block_in_account.tpl');
    }

    public function hookDisplayMyAccountBlockFooter($params)
    {
        return $this->hookDisplayMyAccountBlock($params);
    }

    public function hookDisplayMyAccountBlock()
    {
        $this->context->smarty->assign('module_link', $this->context->link->getModuleLink('cookielaw', 'account'));
        return $this->display(__FILE__, ($this->ps_v == 't17' ? 't17/' : '') . 'block_in_footer.tpl');
    }

    public function assignTemplateVariables()
    {
        $cookielaw_class = 'cookielaw-default ';
        if ((int)Configuration::get('COOKIELAW_POSITION') == 1) {
            $cookielaw_class .= 'cookielaw-fixed-bottom ';
        } else {
            $cookielaw_class .= 'cookielaw-fixed-top ';
        }

        $cookielaw_style = '';
        $cookielaw_text_style = '';
        $cookielaw_button_style = '';

        if (Configuration::get('COOKIELAW_BACKGROUND_COLOR') != '') {
            $cookielaw_style .= 'background-color: ' . Configuration::get('COOKIELAW_BACKGROUND_COLOR') . ';';
        }

        if (Configuration::get('COOKIELAW_TEXT_COLOR') != '') {
            $cookielaw_text_style .= 'color: ' . Configuration::get('COOKIELAW_TEXT_COLOR') . ';';
        }

        if (Configuration::get('COOKIELAW_BLOCK_OPACITY') != '') {
            $cookielaw_style .= 'opacity: ' . Configuration::get('COOKIELAW_BLOCK_OPACITY') . ';';
        }

        if (Configuration::get('COOKIELAW_FONT_SIZE') != '') {
            $cookielaw_text_style .= 'font-size: ' . Configuration::get('COOKIELAW_FONT_SIZE') . 'px;';
        }

        if (Configuration::get('COOKIELAW_BUTTON_BACKGROUND_COLOR') != '') {
            $cookielaw_button_style .= 'background-color: ' . Configuration::get('COOKIELAW_BUTTON_BACKGROUND_COLOR') . ';';
        }

        if (Configuration::get('COOKIELAW_BUTTON_TEXT_COLOR') != '') {
            $cookielaw_button_style .= 'color: ' . Configuration::get('COOKIELAW_BUTTON_TEXT_COLOR') . ';';
        }

        $this->context->smarty->assign(array(
            'cookielaw_style' => $cookielaw_style,
            'cookielaw_text_style' => $cookielaw_text_style,
            'cookielaw_button_text' => nl2br(Configuration::get('COOKIELAW_BUTTON_TEXT', (int)$this->context->language->id)),
            'cookielaw_button_style' => $cookielaw_button_style,
            'cookielaw_text' => nl2br(Configuration::get('COOKIELAW_TEXT', (int)$this->context->language->id)),
            'cookielaw_class' => $cookielaw_class,
            'cookielaw_animation_type' => Configuration::get('COOKIELAW_ANIMATION_TYPE')
                ? Configuration::get('COOKIELAW_ANIMATION_TYPE')
                : 0,
            'cookielaw_close_button_text' => nl2br(Configuration::get('COOKIELAW_CLOSE_BUTTON_TEXT', (int)$this->context->language->id)),
            'cookielaw_close_button_text_color' => 'color:' . Configuration::get('COOKIELAW_CLOSE_BUTTON_TEXT_COLOR') . ';',
            'cookielaw_close_button_background_color' => 'background-color:' . Configuration::get('COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR') . ';',
            'version' => $this->ps_v,
            'color_img_path' => __PS_BASE_URI__ . 'img/admin/'
        ));
    }
}
