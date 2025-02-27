<?php

use PrestaShop\Module\PsEventbus\Config\Config;
use PrestaShop\Module\PsEventbus\Controller\AbstractApiController;
use PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository;

class ps_EventbusApiHealthCheckModuleFrontController extends AbstractApiController
{
    public $type = Config::COLLECTION_SHOPS;

    /**
     * Override default method from AbstractApiController: skip jobId verification
     *
     * @return void
     */
    public function init()
    {
    }

    /**
     * @return void
     *
     * @throws\PrestaShopException
     */
    public function postProcess()
    {
        /** @var ServerInformationRepository $serverInformationRepository */
        $serverInformationRepository = $this->module->getService(ServerInformationRepository::class);

        $status = $serverInformationRepository->getHealthCheckData();

        $this->exitWithResponse($status);
    }
}
