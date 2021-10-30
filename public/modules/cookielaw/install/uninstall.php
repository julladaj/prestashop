<?php
/**
 * cookielaw
 *
 * @category  Module
 * @author    silbersaiten <info@silbersaiten.de>
 * @support   silbersaiten <support@silbersaiten.de>
 * @copyright 2020 silbersaiten
 * @version   1.3.0
 * @link      http://www.silbersaiten.de
 * @license   See joined file licence.txt
*/

$sql = array();

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
