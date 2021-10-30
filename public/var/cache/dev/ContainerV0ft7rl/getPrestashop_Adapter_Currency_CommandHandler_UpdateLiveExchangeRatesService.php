<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.command_handler.update_live_exchange_rates' shared service.

return $this->services['prestashop.adapter.currency.command_handler.update_live_exchange_rates'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\ToggleExchangeRateAutomatizationHandler(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop, ${($_ = isset($this->services['prestashop.adapter.shop.shop_url']) ? $this->services['prestashop.adapter.shop.shop_url'] : $this->load('getPrestashop_Adapter_Shop_ShopUrlService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.module']) ? $this->services['prestashop.adapter.data_provider.module'] : $this->getPrestashop_Adapter_DataProvider_ModuleService()) && false ?: '_'}->isInstalled("cronjobs"), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getAdminBaseUrl(), 'nnpctx5el1');
