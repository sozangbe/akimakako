<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.shipping_preferences.carrier_options.form_handler' shared service.

return $this->services['prestashop.admin.shipping_preferences.carrier_options.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.admin.shipping_preferences.carrier_options.data_provider'] ?? $this->load('getPrestashop_Admin_ShippingPreferences_CarrierOptions_DataProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\CarrierOptionsType', 'ShippingPreferencesPageCarrierOptions', 'carrier-options');
