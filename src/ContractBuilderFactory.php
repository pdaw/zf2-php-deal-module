<?php

namespace PhpDealModule;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Common\PhpDealModule\ContractBuilder as Model;

class ContractBuilderFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $model = new Model();
        $model->setConfig($serviceLocator->get('config')['php-deal-module']);
        return $model;
    }
}
