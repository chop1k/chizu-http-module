<?php

namespace Chizu\Http\Data;

/**
 * Class Cookie represents cookie.
 *
 * @package Chizu\Http\Data
 */
class Cookie
{
    /**
     * Contains cookie name.
     *
     * @var string $name
     */
    protected string $name;

    /**
     * Returns cookie name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets cookie name.
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Contains cookie value.
     *
     * @var string $value
     */
    protected string $value;

    /**
     * Returns cookie value.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets cookie value.
     *
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Cookie constructor.
     */
    public function __construct()
    {
        $this->name = false;
        $this->value = false;
    }
}