<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.4.0
 * @link      http://www.silbersaiten.de
 *
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_4_0($object)
{
    return $object->registerHook('displayCustomerAccount') &&
        $object->registerHook('displayMyAccountBlock') &&
        $object->registerHook('displayMyAccountBlockFooter');
}
