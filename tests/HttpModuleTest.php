<?php

namespace Tests;

use Chizu\DI\Container;
use Chizu\Event\Events;
use Chizu\Http\HttpModule;
use Ds\Map;
use PHPUnit\Framework\TestCase;

class HttpModuleTest extends TestCase
{
    protected HttpModule $module;

    protected function setUp(): void
    {
        $this->module = new HttpModule(new Events(), new Container(), new Map());
    }

    public function testInitiation(): void
    {
        $this->module->getEvents()->get(HttpModule::InitiationEvent)->execute();

        self::assertTrue(true);
    }
}