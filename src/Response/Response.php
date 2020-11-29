<?php

namespace Chizu\Http\Response;

use Ds\Map;

class Response
{
    protected int $status;

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    protected Map $headers;

    /**
     * @return Map
     */
    public function getHeaders(): Map
    {
        return $this->headers;
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

    public function __construct()
    {
        $this->status = 0;
        $this->headers = new Map();
        $this->body = false;
    }

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