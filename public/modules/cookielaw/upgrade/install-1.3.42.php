<?php
/**
 * cookielaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.3.42
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_42($object)
{
    unset($object);
    return Db::getInstance()->execute(
        'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'cookie_law_module_group_lang` (
            `id_module` int UNSIGNED NOT NULL,
            `id_shop` int(11) unsigned default 1 not null,
            `id_lang` int unsigned not null,
            `module_name` varchar(128) NOT NULL,
            `module_description` varchar(512) NOT NULL,
            INDEX (`id_module`, `id_shop`, `id_lang`),
            UNIQUE KEY `module_names` (`id_module`, `id_shop`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
            '
    );
}
