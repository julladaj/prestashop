<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2018 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.2.4
 * @link      http://www.silbersaiten.de
 *
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_1_0($object)
{
    return $object->registerHook('displayHeader');
}
