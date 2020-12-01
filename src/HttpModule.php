<?php

namespace Chizu\Http;

use Chizu\Event\Event;
use Chizu\Module\Module;

class HttpModule extends Module
{
    public const RequestEvent = 'http.request';
    public const ResponseEvent = 'http.response';

    public function __construct()
    {
        parent::__construct();

        $this->dispatcher->set(Module::InitiationEvent, new Event([function () {
            $this->onInitiation();
        }]));
    }

    protected function onInitiation(): void
    {
        $this->setInitiated(true);
    }
}