<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.repository' shared service.

return $this->services['mbo.modules.repository'] = new \PrestaShop\Module\Mbo\Module\Repository(($this->services['mbo.cdc.client.connected_distribution_api'] ?? $this->load('getMbo_Cdc_Client_ConnectedDistributionApiService.php')), ($this->services['mbo.modules.builder'] ?? $this->load('getMbo_Modules_BuilderService.php')), ($this->services['logger'] ?? $this->getLoggerService()), ($this->services['translator'] ?? $this->getTranslatorService())->getLocale(), ($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_DB_PREFIX_"), ($this->services['mbo.security.admin_authentication.provider'] ?? $this->load('getMbo_Security_AdminAuthentication_ProviderService.php')));
