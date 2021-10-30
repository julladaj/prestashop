<?php
/**
 * Cookielaw
 *
 * @author    silbersaiten <info@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @license   See joined file licence.txt
 * @category  Module
 * @support   silbersaiten <support@silbersaiten.de> *
 * @version   1.3.1
 * @link      http://www.silbersaiten.de
 *
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_1($object)
{
    include(dirname(__FILE__) . '/../install/install.php');
    $object->installOverrides();
    return true;
}
