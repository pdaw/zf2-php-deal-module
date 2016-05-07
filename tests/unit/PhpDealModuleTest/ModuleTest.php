<?php

namespace PhpDealModuleTest;

use PhpDealModule\Module;
use PHPUnit_Framework_TestCase;

class ModuleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function successfullyGetConfigAsArray()
    {
        $module = new Module();
        $config = $module->getConfig();
        $this->assertInternalType('array', $config);
    }
}
