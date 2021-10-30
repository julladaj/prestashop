<?php
/**
 * CookieLaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.3.44
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_44($object)
{
    unset($object);
    return Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'cookie_law_module_group` ADD `id_shop` int(10) unsigned NOT NULL;');
}
