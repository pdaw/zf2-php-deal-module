<?php

namespace PhpDealModule;

use Zend\EventManager\EventInterface as Event;
use Zend\ServiceManager\ServiceManager;

class Module
{
    /**
     * @param Event $event
     */
    public function onBootstrap(Event $event)
    {
        $application = $event->getApplication();
        $services = $application->getServiceManager();

        $this->rebuildContracts($services);
    }

    /**
     * @param ServiceManager $services
     */
    private function rebuildContracts($services)
    {
        /**
         * @var ContractBuilder $contractBuilder
         */
        $contractBuilder = $services->get('PhpDealModule\ContractBuilder');
        $contractBuilder->rebuild();
    }

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
