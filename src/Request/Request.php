<?php

namespace Chizu\Http\Request;

use Ds\Map;

/**
 * Class Request
 *
 * @package Chizu\Http\Request
 */
class Request
{
    protected string $method;

    /**
     * @return false|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param false|string $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    protected string $url;

    /**
     * @return false|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param false|string $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    protected Map $headers;

    /**
     * @return Map
     */
    public function getHeaders(): Map
    {
        return $this->headers;
    }

    protected Map $cookies;

    /**
     * @return Map
     */
    public function getCookies(): Map
    {
        return $this->cookies;
    }

    protected Map $query;

    /**
     * @return Map
     */
    public function getQuery(): Map
    {
        return $this->query;
    }

    protected string $body;

    /**
     * @return false|string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param false|string $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    protected Map $files;

    /**
     * @return Map
     */
    public function getFiles(): Map
    {
        return $this->files;
    }

    protected Map $params;

    /**
     * @return Map
     */
    public function getParams(): Map
    {
        return $this->params;
    }

    protected int $time;

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    protected string $address;

    /**
     * @return false|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param false|string $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    protected int $port;

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port): void
    {
        $this->port = $port;
    }

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