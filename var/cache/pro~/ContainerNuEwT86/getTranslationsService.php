<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Translations\Translations' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php')));
