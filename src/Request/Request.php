<?php

namespace Chizu\Http\Request;

use Chizu\Http\Data\Body;
use Chizu\Http\Data\Cookies;
use Chizu\Http\Data\Files;
use Chizu\Http\Data\Headers;
use Chizu\Http\Data\Params;
use Chizu\Http\Data\Query;

class Request
{
    protected string $method;

    protected string $url;

    protected Headers $headers;

    protected Cookies $cookies;

    protected Query $query;

    protected Body $body;

    protected Files $files;

    protected Params $params;

    protected int $time;

    protected string $address;

    protected int $port;
}