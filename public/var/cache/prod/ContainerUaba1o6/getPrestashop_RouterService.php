<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.router' shared service.

$this->services['prestashop.router'] = $instance = new \PrestaShopBundle\Service\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

$instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : ($this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())) && false ?: '_'});
$instance->setTokenManager(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->getSecurity_Csrf_TokenManagerService()) && false ?: '_'});
$instance->setUserProvider(${($_ = isset($this->services['prestashop.user_provider']) ? $this->services['prestashop.user_provider'] : $this->load('getPrestashop_UserProviderService.php')) && false ?: '_'});

return $instance;
