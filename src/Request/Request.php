<?php

namespace Chizu\Http\Request;

use Ds\Map;

/**
 * Class Request represents http request.
 *
 * @package Chizu\Http\Request
 */
class Request
{
    /**
     * Contains http method.
     *
     * @var string $method
     */
    protected string $method;

    /**
     * Returns http method.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Sets http method.
     *
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * Contains request path.
     *
     * @var string $url
     */
    protected string $url;

    /**
     * Returns request path.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets request path.
     *
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Contains map with headers.
     *
     * @var Map $headers
     */
    protected Map $headers;

    /**
     * Returns map with headers.
     *
     * @return Map
     */
    public function getHeaders(): Map
    {
        return $this->headers;
    }

    /**
     * Contains map with cookies.
     *
     * @var Map $cookies
     */
    protected Map $cookies;

    /**
     * Returns map with cookies.
     *
     * @return Map
     */
    public function getCookies(): Map
    {
        return $this->cookies;
    }

    /**
     * Contains map with query data.
     *
     * @var Map $query
     */
    protected Map $query;

    /**
     * Returns map with query data.
     *
     * @return Map
     */
    public function getQuery(): Map
    {
        return $this->query;
    }

    /**
     * Contains request raw body.
     *
     * @var string $body
     */
    protected string $body;

    /**
     * Returns request raw body.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Sets request raw body.
     *
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * Contains request files.
     *
     * @var Map $files
     */
    protected Map $files;

    /**
     * Returns request files.
     *
     * @return Map
     */
    public function getFiles(): Map
    {
        return $this->files;
    }

    /**
     * Contains request params.
     *
     * @var Map $params
     */
    protected Map $params;

    /**
     * Returns request params.
     *
     * @return Map
     */
    public function getParams(): Map
    {
        return $this->params;
    }

    /**
     * Contains request time in unix.
     *
     * @var int $time
     */
    protected int $time;

    /**
     * Returns request time in unix.
     *
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * Sets request time in unix.
     *
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * Contains request remote address.
     *
     * @var string $address
     */
    protected string $address;

    /**
     * Returns request remote address.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Sets request remote address.
     *
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * Contains request remote port.
     *
     * @var int $port
     */
    protected int $port;

    /**
     * Returns request remote port.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Sets request remote port.
     *
     * @param int $port
     */
    public function setPort(int $port): void
    {
        $this->port = $port;
    }

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->method = false;
        $this->url = false;
        $this->headers = new Map();
        $this->cookies = new Map();
        $this->query = new Map();
        $this->body = false;
        $this->files = new Map();
        $this->params = new Map();
        $this->time = 0;
        $this->address = false;
        $this->port = 0;
    }
}