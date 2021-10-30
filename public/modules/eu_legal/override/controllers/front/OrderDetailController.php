<?php
/**
 * EU Legal - Better security for German and EU merchants.
 *
 * @version   : 1.0.2
 * @date      : 2014 08 26
 * @author    : Markus Engel/Chris Gurk @ Onlineshop-Module.de | George June/Alexey Dermenzhy @ Silbersaiten.de
 * @copyright : 2014 Onlineshop-Module.de | 2014 Silbersaiten.de
 * @contact   : info@onlineshop-module.de | info@silbersaiten.de
 * @homepage  : www.onlineshop-module.de | www.silbersaiten.de
 * @license   : http://opensource.org/licenses/osl-3.0.php
 * @changelog : see changelog.txt
 * @compatibility : PS == 1.6.0.11
 */

class OrderDetailController extends OrderDetailControllerCore
{
    public function initContent()
    {
        parent::initContent();

        $_legal = Module::getInstanceByName('eu_legal');
        if (Validate::isLoadedObject($_legal) && Module::isInstalled($_legal->name) && Module::isEnabled($_legal->name))
            if ($tpl = $_legal->getThemeOverride('order-detail'))
                $this->setTemplate($tpl);
    }
}