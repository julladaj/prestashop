<?php
/**
 * CookieLaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.4.5
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
 */

require_once(dirname(__FILE__) . '/../../classes/CookieLawHelper.php');

class CookieLawAccountModuleFrontController extends ModuleFrontController
{
    protected $context;

    public function __construct()
    {
        $this->ajax = true;
        parent::__construct();
        $this->context = Context::getContext();
    }

    public function init()
    {
        if (Tools::getIsset('cookie_law_customer_confirm') && !Tools::getIsset('ajax')) {
            $this->setCustomerAvailableModule();
        } elseif (Tools::getIsset('cookie_law_customer_clear')) {
            $this->context->cookie->__unset('cookie_law_blocked_modules');
        }

        parent::init();
    }

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'cookie_law_action' => $this->context->link->getModuleLink('cookielaw', 'account'),
            'modules' => CookieLawHelper::getCustomerNotAllowedModules($this->context->cookie->__get('cookie_law_blocked_modules'), $this->context->language->id),
        ));

        if (version_compare('1.7.0.0', _PS_VERSION_, '>')) {
            $this->setTemplate('/not_allowed_modules.tpl');
        } else {
            $this->setTemplate('module:cookielaw/views/templates/front/1.7/not_allowed_modules.tpl');
        }
    }

    private function setCustomerAvailableModule()
    {
        if (Tools::getIsset('cookie_law_customer_confirm')) {
            $module_ids = Tools::getValue('module_ids', array());
            $module_ids_saved = CookieLawHelper::getCookAbleModuleIds();
            $list_saved_ids = array();

            foreach ($module_ids_saved as $module_id) {
                /* We could use array_column, but php compatibility */
                $list_saved_ids[] = $module_id['id_module'];
            }

            $inserted_cookie = array();
            $diff_ids = array_diff($list_saved_ids, $module_ids);

            foreach ($diff_ids as $id) {
                $inserted_cookie[] = $id;
            }

            $this->context->cookie->__set('cookie_law_blocked_modules', implode(',', $inserted_cookie));
        }
    }

    public function displayAjaxAccept()
    {
        $this->setCustomerAvailableModule();
        echo(json_encode(array('result' => true)));
    }
}
