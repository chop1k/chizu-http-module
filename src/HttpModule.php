<?php

namespace Chizu\Http;

use Chizu\DI\Container;
use Chizu\Event\Event;
use Chizu\Event\Events;
use Chizu\Module\Module;
use Ds\Map;

/**
 * Class HttpModule is a module which provides http functionality.
 *
 * @package Chizu\Http
 */
class HttpModule extends Module
{
    public const InitiationEvent = 'http.initiation';
    public const RequestEvent = 'http.request';
    public const ResponseEvent = 'http.response';

    /**
     * HttpModule constructor.
     *
     * @param Events $events
     * @param Container $container
     * @param Map $modules
     */
    public function __construct(Events $events, Container $container, Map $modules)
    {
        parent::__construct($events, $container, $modules);

        $this->events->set(self::InitiationEvent, Event::createByMethod($this, 'onInitiation'));
    }

    /**
     * Executes when initiation event dispatched.
     */
    protected function onInitiation(): void
    {
        $this->setInitiated(true);
    }
}