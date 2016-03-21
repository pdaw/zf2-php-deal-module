<?php

$basicDirectory = defined('APPLICATION_PATH') ? APPLICATION_PATH : __DIR__;

return array(
    'service_manager' => [
        'factories' => [
            'PhpDealModule\ContractBuilder' => 'PhpDealModule\ContractBuilderFactory'
        ]
    ],
    'php-deal-module' => [
        'debug'    => true,
        'appDir'   => $basicDirectory . '/module/',
        'cacheDir' => $basicDirectory . '/data/php-deal-cache/'
    ],
);
