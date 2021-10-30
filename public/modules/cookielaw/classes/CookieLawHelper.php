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

class CookieLawHelper
{
    public static function getCookieLawOptions()
    {
        $context = Context::getContext();
        $query = new DbQuery();
        $query->select('*');
        $query->from('cookie_law_module_group', 'mg');
        $query->where('id_shop=' . (int)$context->shop->id);
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
    }

    public static function getCookAbleModuleIds()
    {
        $context = Context::getContext();
        $query = new DbQuery();
        $query->select('id_module');
        $query->from('cookie_law_module_group', 'mg');
        $query->where('id_shop=' . (int)$context->shop->id);
        return Db::getInstance()->executeS($query);
    }

    public static function getModuleLangNames($id_module, $id_shop)
    {
        $query = new DbQuery();
        $query->select('*');
        $query->from('cookie_law_module_group_lang', 'mgl');
        $query->where('mgl.id_module=' . $id_module);
        $query->where('mgl.id_shop=' . $id_shop);
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);

        $output = array();
        foreach ($result as $lang) {
            $output[$lang['id_lang']] = $lang;
        }

        return $output;
    }

    public static function getCustomerNotAllowedModules($ids_modules, $id_lang)
    {
        if (!$ids_modules) return array();

        $query = new DbQuery();
        $query->select('*');
        $query->from('cookie_law_module_group_lang', 'mgl');
        $query->where('id_lang=' . (int)$id_lang);
        $query->where('id_module IN(' . $ids_modules . ')');
        return Db::getInstance()->executeS($query);
    }
}
