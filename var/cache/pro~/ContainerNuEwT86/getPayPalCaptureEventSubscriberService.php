<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())), ($this->services['ps_checkout.cache.paypal.capture'] ?? $this->load('getPsCheckout_Cache_Paypal_CaptureService.php')), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->load('getPsCheckout_Cache_Paypal_OrderService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] ?? $this->load('getOrderStateMapperService.php')));
