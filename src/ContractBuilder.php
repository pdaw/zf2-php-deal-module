<?php

namespace Common\PhpDealModule;

use PhpDeal\ContractApplication;

class ContractBuilder
{
    /**
     * @var array
     */
    private $config;

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function rebuild()
    {
        ContractApplication::getInstance()->init(array(
            'debug'    => $this->config['debug'],
            'appDir'   => $this->config['appDir'],
            'cacheDir' => $this->config['cacheDir']
        ));
    }
}
