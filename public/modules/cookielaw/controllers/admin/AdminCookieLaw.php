<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.4.6
 * @link      http://www.silbersaiten.de
 */

class AdminCookieLawController extends ModuleAdminController
{
    private $all_languages;

    public function __construct()
    {
        $this->all_languages = Language::getLanguages(false);
        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->module = Module::getInstanceByName('cookielaw');
        parent::__construct();
    }

    public function initContent()
    {
        $this->initToolbar();
        $this->initPageHeaderToolbar();

        if (Tools::isSubmit('submitCookieLawConfiguration')) {
            $this->saveConfiguration();
        } elseif (Tools::isSubmit('submitAdvancedCookieOptions')) {
            $this->saveAdvancedConfiguration();
        } elseif (Tools::isSubmit('submitCommonCookieOptions')) {
            $this->saveCommonConfiguration();
        }

        $this->setConfigurationContent();

        $this->context->smarty->assign(array(
            'content' => $this->content,
            'show_page_header_toolbar' => $this->show_page_header_toolbar,
            'page_header_toolbar_title' => $this->page_header_toolbar_title,
            'page_header_toolbar_btn' => $this->page_header_toolbar_btn
        ));
    }

    private function setConfigurationContent()
    {
        $this->content .= $this->displayCookieCommonOptions();
        $this->content .= $this->displayExample();
        $this->content .= $this->displayForm();
        $this->content .= $this->displayCookieOptions();
    }

    private function displayCookieCommonOptions()
    {
        $this->context->smarty->assign(array(
            'action' => $this->context->link->getAdminLink('AdminCookieLaw'),
            'list_cms' => $this->getCMSPages(),
            'COOKIELAW_CMS_ID' => Configuration::get('COOKIELAW_CMS_ID'),
            'expanded_use' => Configuration::get('COOKIE_LAW_ADVANCED_ENABLED')
        ));

        return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/cookie_common_options.tpl');
    }

    private function displayCookieOptions()
    {
        $list_names = Module::getModulesDirOnDisk();
        $needed_modules = array();
        $_tmp_list_names = $list_names;

        foreach ($list_names as $key => $module_name) {
            if ($module_name == 'cookielaw') {
                unset($list_names[$key]);
                continue;
            }
            $path = _PS_MODULE_DIR_ . $module_name;
            $files = $this->getFilesWithCookie($path);

            if (count($files)) {
                $module = Module::getInstanceByName($module_name);
                $needed_modules[$module->id] = $module;
                unset($list_names[$key]);
            }
        }

        $grouped_list = $this->getGroupedModules();
        $list_by_group = array();
        $grouped_module_ids = array();

        foreach ($grouped_list as $grouped_module) {
            $names_lang = CookieLawHelper::getModuleLangNames($grouped_module['id_module'], $this->context->shop->id);

            if (isset($_tmp_list_names[$grouped_module['id_module']])) {
	            $current_module_name = $_tmp_list_names[$grouped_module['id_module']];
			} elseif (isset($needed_modules[$grouped_module['id_module']]->name)) {
				$current_module_name = $needed_modules[$grouped_module['id_module']]->name;
			} else {
				$current_module_name = strtolower(str_replace(' ', '', $names_lang[$this->context->language->id]['module_name']));
			}


            if (isset($names_lang[$this->context->language->id]) && count($names_lang[$this->context->language->id])) {
                $grouped_module['displayName'] = $names_lang[$this->context->language->id]['module_name'];
                $grouped_module['name'] = $current_module_name;
                $grouped_module['description'] = $names_lang[$this->context->language->id]['module_description'];
                $grouped_module['names_lang'] = $names_lang;
                $list_by_group[$grouped_module['id_module_group']][] = $grouped_module;
                unset($needed_modules[$grouped_module['id_module']]);
                $grouped_module_ids[] = $grouped_module['id_module'];
            }
        }

        $full_list_of_modules = array();
        foreach ($list_names as $key => $module_name) {
            $module = Module::getInstanceByName($module_name);

            if (!in_array($module->id, $grouped_module_ids)) {
                $full_list_of_modules[$module->id] = $module;
            }
        }

        $this->context->smarty->assign(array(
            'languages' => $this->all_languages,
            'current_language' => $this->context->language->id,
            'action' => $this->context->link->getAdminLink('AdminCookieLaw'),
            'list_of_modules' => $needed_modules,
            'list_by_group' => $list_by_group,
            'full_list_of_modules' => $full_list_of_modules,
            'modules_dir' => _MODULE_DIR_
        ));

        return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/cookie_options.tpl');
    }

    private function getGroupedModules()
    {
        return Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'cookie_law_module_group` WHERE `id_shop`=' . (int)$this->context->shop->id . ' ORDER BY id_module_group ASC');
    }

    private function getFilesWithCookie($path)
    {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $files = array();

        foreach ($rii as $file) {
            if (in_array($file->getExtension(), array('php', 'tpl', 'js')) && $file->getFilename() !== 'index.php') {
                $matches = $this->findMentionOfCookie($file);

                if (count($matches)) {
                    $files[] = $file->getPathname();
                }
            }
        }

        return $files;
    }

    private function findMentionOfCookie($file)
    {
        $file_content = file_get_contents($file);
        $matches = array();
        preg_match('/cookie->write|cookie->__set|cookie->update|\.cookie/', $file_content, $matches);
        return $matches;
    }

    private function saveCommonConfiguration()
    {
        if (Tools::getIsset('expanded_use') && !Configuration::updateValue('COOKIE_LAW_ADVANCED_ENABLED', (int)Tools::getValue('expanded_use'))) {
            $this->errors[] = $this->l('Could not update') . ': expanded_use';
        }

        if (Tools::getIsset('COOKIELAW_CMS_ID') && !Configuration::updateValue('COOKIELAW_CMS_ID', (int)Tools::getValue('COOKIELAW_CMS_ID'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_CMS_ID';
        }

        if (count($this->errors) <= 0) {
            $this->confirmations[] = $this->l('Common settings updated');
        }
    }

    private function saveAdvancedConfiguration()
    {
        $module_group_1 = Tools::getValue('module_group_1', array());
        $module_group_2 = Tools::getValue('module_group_2', array());
        $module_group_3 = Tools::getValue('module_group_3', array());
        $id_shop = (int)$this->context->shop->id;
        $inserted = array();
        foreach ($module_group_1 as $module_id) {
            $inserted[] = array(
                'id_module_group' => 1,
                'id_module' => $module_id,
                'id_shop' => $id_shop
            );
        }

        foreach ($module_group_2 as $module_id) {
            $inserted[] = array(
                'id_module_group' => 2,
                'id_module' => $module_id,
                'id_shop' => $id_shop
            );
        }

        foreach ($module_group_3 as $module_id) {
            $inserted[] = array(
                'id_module_group' => 3,
                'id_module' => $module_id,
                'id_shop' => $id_shop
            );
        }

        $inserted_lang = array();
        foreach ($inserted as $module) {
            foreach ($this->all_languages as $lang) {
                $inserted_lang[] = array(
                    'id_module' => (int)$module['id_module'],
                    'id_shop' => $id_shop,
                    'id_lang' => (int)$lang['id_lang'],
                    'module_name' => pSQL(Tools::getValue('module_name_' . $module['id_module'] . '_' . $lang['id_lang'])),
                    'module_description' => pSQL(Tools::getValue('module_description_' . $module['id_module'] . '_' . $lang['id_lang'])),
                );
            }
        }

        Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'cookie_law_module_group` WHERE id_shop = ' . $id_shop);
        Db::getInstance()->insert('cookie_law_module_group', $inserted);

        Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'cookie_law_module_group_lang` WHERE id_shop = ' . $id_shop);
        Db::getInstance()->insert('cookie_law_module_group_lang', $inserted_lang);
    }

    private function displayExample()
    {
        $this->context->smarty->assign(array(
            'cookielaw_cms' => (int)Configuration::get('COOKIELAW_CMS_ID') != 0
                ? $this->context->link->getCMSLink((int)Configuration::get('COOKIELAW_CMS_ID'))
                : '',
        ));
        $this->module->assignTemplateVariables();
        return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->module->name . '/views/templates/hook/cookielaw.tpl');
    }

    private function saveConfiguration()
    {
        $languages = Language::getLanguages(false, false);
        $cookielaw_text = array();
        $cookielaw_button = array();
        $cookielaw_close_button = array();
        foreach ($languages as $language) {
            if (Tools::getIsset('COOKIELAW_TEXT_' . $language['id_lang'])) {
                $cookielaw_text[$language['id_lang']] = Tools::getValue('COOKIELAW_TEXT_' . $language['id_lang']);
            }

            if (Tools::getIsset('COOKIELAW_BUTTON_TEXT_' . $language['id_lang'])) {
                $cookielaw_button[$language['id_lang']] = Tools::getValue('COOKIELAW_BUTTON_TEXT_' . $language['id_lang']);
            }

            if (Tools::getIsset('COOKIELAW_CLOSE_BUTTON_TEXT_' . $language['id_lang'])) {
                $cookielaw_close_button[$language['id_lang']] = Tools::getValue('COOKIELAW_CLOSE_BUTTON_TEXT_' . $language['id_lang']);
            }
        }

        if (count($cookielaw_text) && !Configuration::updateValue('COOKIELAW_TEXT', $cookielaw_text)) {
            $this->errors[] = $this->l('Could not update') . ':COOKIELAW_TEXT';
        }
        if (count($cookielaw_button) && !Configuration::updateValue('COOKIELAW_BUTTON_TEXT', $cookielaw_button)) {
            $this->errors[] = $this->l('Could not update') . ':COOKIELAW_BUTTON_TEXT';
        }

        if (count($cookielaw_close_button) && !Configuration::updateValue('COOKIELAW_CLOSE_BUTTON_TEXT', $cookielaw_close_button)) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_CLOSE_BUTTON_TEXT';
        }

        if (Tools::getIsset('COOKIELAW_POSITION') && !Configuration::updateValue('COOKIELAW_POSITION', (int)Tools::getValue('COOKIELAW_POSITION'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_POSITION';
        }

        if (Tools::getIsset('COOKIELAW_ANIMATION_TYPE') && !Configuration::updateValue('COOKIELAW_ANIMATION_TYPE', (int)Tools::getValue('COOKIELAW_ANIMATION_TYPE'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_ANIMATION_TYPE';
        }

        if (Tools::getIsset('COOKIELAW_BACKGROUND_COLOR') &&
            !Configuration::updateValue('COOKIELAW_BACKGROUND_COLOR', Tools::getValue('COOKIELAW_BACKGROUND_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_BACKGROUND_COLOR';
        }

        if (Tools::getIsset('COOKIELAW_BUTTON_BACKGROUND_COLOR') &&
            !Configuration::updateValue('COOKIELAW_BUTTON_BACKGROUND_COLOR', Tools::getValue('COOKIELAW_BUTTON_BACKGROUND_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_BUTTON_BACKGROUND_COLOR';
        }

        if (Tools::getIsset('COOKIELAW_TEXT_COLOR') && !Configuration::updateValue('COOKIELAW_TEXT_COLOR', Tools::getValue('COOKIELAW_TEXT_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_TEXT_COLOR';
        }

        if (Tools::getIsset('COOKIELAW_BUTTON_TEXT_COLOR') && !Configuration::updateValue('COOKIELAW_BUTTON_TEXT_COLOR', Tools::getValue('COOKIELAW_BUTTON_TEXT_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_BUTTON_TEXT_COLOR';
        }

        if (Tools::getIsset('COOKIELAW_BLOCK_OPACITY') && !Configuration::updateValue('COOKIELAW_BLOCK_OPACITY', (int)Tools::getValue('COOKIELAW_BLOCK_OPACITY') / 10)) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_BLOCK_OPACITY';
        }
        if (Tools::getIsset('COOKIELAW_FONT_SIZE') && !Configuration::updateValue('COOKIELAW_FONT_SIZE', Tools::getValue('COOKIELAW_FONT_SIZE'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_FONT_SIZE';
        }

        if (Tools::getIsset('COOKIELAW_CLOSE_BUTTON_TEXT_COLOR') && !Configuration::updateValue('COOKIELAW_CLOSE_BUTTON_TEXT_COLOR', Tools::getValue('COOKIELAW_CLOSE_BUTTON_TEXT_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_CLOSE_BUTTON_TEXT_COLOR';
        }

        if (Tools::getIsset('COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR') && !Configuration::updateValue('COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR', Tools::getValue('COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR'))) {
            $this->errors[] = $this->l('Could not update') . ': COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR';
        }

        if (count($this->errors) <= 0) {
            $this->confirmations[] = $this->l('Settings updated');
        }
    }

    protected function displayForm()
    {
        $helper = new HelperOptions();
        $helper->required = false;
        $helper->id = Tab::getCurrentTabId();
        $helper->currentIndex = self::$currentIndex;
        $helper->table = '';
        $helper->token = Tools::getAdminTokenLite('AdminCookieLaw');
        $helper->module = $this->module;
        $helper->identifier = null;
        $helper->toolbar_btn = null;
        $helper->ps_help_context = null;
        $helper->title = null;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = false;
        $helper->bootstrap = false;
        $this->getOptionsFieldsSettings();
        return $helper->generateOptions($this->option_fields_settings);
    }

    protected function getOptionsFieldsSettings()
    {
        $list_positions = array(
            array('value' => 0, 'name' => $this->l('On top of page')),
            array('value' => 1, 'name' => $this->l('On bottom of page')),
        );
        $list_animations = array(
            array('value' => 0, 'name' => $this->l('Fade in/out')),
            array('value' => 1, 'name' => $this->l('Slide in/out')),
        );

        $this->option_fields_settings['settings'] = array(
            'title' => $this->l('Settings'),
            'fields' => array(
                'COOKIELAW_TEXT' => array(
                    'title' => $this->l('Text'),
                    'type' => 'textareaLang',
                    'desc' => str_replace(
                        '[shop_name]',
                        Tools::safeOutput(Configuration::get('PS_SHOP_NAME', null, null, null)),
                        $this->l('Ex: In order to give you a better service [shop_name] uses cookies. By continuing to browse the site you are agreeing to our use of cookies.')
                    ),
                ),
                'COOKIELAW_BLOCK_OPACITY' => array(
                    'title' => $this->l('Background color opacity'),
                    'type' => 'rangeslider',
                    'name' => 'COOKIELAW_BLOCK_OPACITY',
                    'id' => 'range_opacity',
                    'min' => 1,
                    'max' => 10,
                    'step' => 1,
                    'default' => Configuration::get('COOKIELAW_BLOCK_OPACITY') ? Configuration::get('COOKIELAW_BLOCK_OPACITY') * 10 : 10,
                ),
                'COOKIELAW_FONT_SIZE' => array(
                    'title' => $this->l('Font size'),
                    'type' => 'rangeslider',
                    'name' => 'COOKIELAW_FONT_SIZE',
                    'id' => 'range_font_size',
                    'min' => 6,
                    'max' => 48,
                    'step' => 2,
                    'default' => Configuration::get('COOKIELAW_FONT_SIZE') ? Configuration::get('COOKIELAW_FONT_SIZE') : 10,
                ),
                'COOKIELAW_POSITION' => array(
                    'title' => $this->l('Position on page'),
                    'validation' => 'isUnsignedInt',
                    'cast' => 'intval',
                    'type' => 'select',
                    'list' => $list_positions,
                    'identifier' => 'value',
                ),
                'COOKIELAW_ANIMATION_TYPE' => array(
                    'title' => $this->l('Animation on page'),
                    'validation' => 'isUnsignedInt',
                    'cast' => 'intval',
                    'type' => 'select',
                    'list' => $list_animations,
                    'identifier' => 'value',
                ),
                'COOKIELAW_BACKGROUND_COLOR' => array(
                    'title' => $this->l('Background color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_BACKGROUND_COLOR'
                ),
                'COOKIELAW_TEXT_COLOR' => array(
                    'title' => $this->l('Text color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_TEXT_COLOR'
                ),
                'COOKIELAW_BUTTON_TEXT' => array(
                    'title' => $this->l('Button name'),
                    'type' => 'textLang'
                ),
                'COOKIELAW_BUTTON_BACKGROUND_COLOR' => array(
                    'title' => $this->l('Button background color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_BUTTON_BACKGROUND_COLOR'
                ),
                'COOKIELAW_BUTTON_TEXT_COLOR' => array(
                    'title' => $this->l('Button text color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_BUTTON_TEXT_COLOR'
                ),
                'COOKIELAW_CLOSE_BUTTON_TEXT' => array(
                    'title' => $this->l('Close button name'),
                    'type' => 'textLang'
                ),
                'COOKIELAW_CLOSE_BUTTON_TEXT_COLOR' => array(
                    'title' => $this->l('Close button text color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_CLOSE_BUTTON_TEXT_COLOR'
                ),
                'COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR' => array(
                    'title' => $this->l('Close button background color'),
                    'type' => 'color',
                    'size' => '8',
                    'name' => 'COOKIELAW_CLOSE_BUTTON_BACKGROUND_COLOR'
                ),
            ),
            'submit' => array(
                'name' => 'submitCookieLawConfiguration',
                'title' => $this->l('Save')
            )
        );
    }

    private function getCMSPages()
    {
        $cms_pages = array();

        if (Shop::getContext() === Shop::CONTEXT_ALL) {
            $shop_id = null;
        } else {
            $shop_id = $this->context->shop->id;
        }

        $result = CMS::getCMSPages($this->context->language->id, null, false, $shop_id);
        $cms_pages[] = array('value' => 0, 'name' => $this->l('-- Please select a CMS page --'));

        foreach ($result as $row) {
            $cms_pages[] = array('value' => $row['id_cms'], 'name' => $row['id_cms'] . ' ' . $row['meta_title']);
        }

        usort($cms_pages, function ($a, $b) {
            return $a['value'] > $b['value'];
        });

        return $cms_pages;
    }
}
