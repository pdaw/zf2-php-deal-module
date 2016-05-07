<?php

ini_set('error_reporting', E_ALL);

$loader = require_once realpath(dirname(__FILE__) . '/../../') . '/vendor/autoload.php';

if (!isset($loader)) {
    throw new RuntimeException('vendor/autoload.php could not be found. Run composer install.');
}
/* @var $loader \Composer\Autoload\ClassLoader */
$loader->add('PhpDealModuleTest\\', __DIR__);
