<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.admin.page_preference_interface' shared service.

return $this->services['prestashop.core.admin.page_preference_interface'] = new \PrestaShop\PrestaShop\Adapter\Admin\PagePreference(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, false);
