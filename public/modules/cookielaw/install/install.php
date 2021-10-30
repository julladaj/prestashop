<?php
/**
 * cookielaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.4.5
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
 */

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'cookie_law_module_group` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_module_group` int UNSIGNED NOT NULL,
    `id_module` int UNSIGNED NOT NULL,
    `id_shop` int unsigned NOT NULL,
    PRIMARY KEY  (`id`),
    INDEX (`id_module_group`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'cookie_law_module_group_lang` (
    `id_module` int UNSIGNED NOT NULL,
    `id_shop` int(11) unsigned default 1 not null,
    `id_lang` int unsigned not null,
    `module_name` varchar(128) NOT NULL,
    `module_description` varchar(512) NOT NULL,
    INDEX (`id_module`, `id_shop`, `id_lang`),
    UNIQUE KEY `module_names` (`id_module`, `id_shop`, `id_lang`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
