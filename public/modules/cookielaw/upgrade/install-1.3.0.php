<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.3.0
 * @link      http://www.silbersaiten.de
 *
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_0($object)
{
    unset($object);
    $tab = new Tab();
    $tab->module = 'cookielaw';
    $tab->active = 1;
    $tab->class_name = 'AdminCookieLaw';
    $tab->id_parent = (int)Tab::getIdFromClassName('CONFIGURE');
    $tab->icon = 'account_balance';

    foreach (Language::getLanguages(true) as $lang) {
        $tab->name[$lang['id_lang']] = 'CookieLaw settings';
    }

    return $tab->add();
}
