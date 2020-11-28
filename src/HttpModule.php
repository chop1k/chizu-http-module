<?php

namespace Chizu\Http;

use Chizu\Module\Module;

class HttpModule extends Module
{
    public const RequestEvent = 'http.request';
    public const ResponseEvent = 'http.response';

    public function __construct()
    {
        parent::__construct();

        $this->dispatcher->listen(Module::InitiationEvent, function () {
            $this->onInitiation();
        });
    }

    protected function onInitiation(): void
    {
        $this->dispatcher->listen(self::RequestEvent, function () {
            $this->onRequest();
        });

        $this->dispatcher->listen(self::ResponseEvent, function () {
            $this->onResponse();
        });
    }

    protected function onRequest(): void
    {

    }

    protected function onResponse(): void
    {

    }
}