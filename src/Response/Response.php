<?php

namespace Chizu\Http\Response;

use Ds\Map;
use Exception;

/**
 * Class Response represents http response.
 *
 * @package Chizu\Http\Response
 */
class Response
{
    /**
     * Http response status number.
     *
     * @var int $status
     */
    protected int $status;

    /**
     * Returns http response status number.
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Sets http response status number.
     *
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * Contains http response headers.
     *
     * @var Map $headers
     */
    protected Map $headers;

    /**
     * Returns http response headers.
     *
     * @return Map
     */
    public function getHeaders(): Map
    {
        return $this->headers;
    }

    /**
     * Contains http response body.
     *
     * @var string $body
     */
    protected string $body;

    /**
     * Returns http response body.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Sets http response body.
     *
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * Response constructor.
     */
    public function __construct()
    {
        $this->status = 0;
        $this->headers = new Map();
        $this->body = false;
    }

    /**
     * Sends http response.
     *
     * @throws Exception
     */
    public function send(): void
    {
        http_response_code($this->getStatus());

        foreach ($this->headers->getIterator() as $name => $value)
        {
            header(sprintf('%s:%s', $name, $value));
        }

        echo $this->getBody();
    }
}