<?php


namespace Chizu\Http\Data;

/**
 * Class File represents file.
 *
 * @package Chizu\Http\Data
 */
class File
{
    /**
     * Contains file name.
     *
     * @var string $name
     */
    private string $name;

    /**
     * Returns file name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets file name.
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Contains file type.
     *
     * @var string $type
     */
    private string $type;

    /**
     * Returns file type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets file type.
     *
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Contains path to temporary file.
     *
     * @var string $path
     */
    private string $path;

    /**
     * Return path to temporary file.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Sets path to temporary file.
     *
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * Contains size of file.
     *
     * @var int $size
     */
    private int $size;

    /**
     * Returns size of file.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Sets size of file.
     *
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function __construct()
    {
        $this->name = false;
        $this->type = false;
        $this->path = false;
        $this->size = 0;
    }

    /**
     * Reads file and returns result
     *
     * @return false|string
     */
    public function getContent()
    {
        return file_get_contents($this->path);
    }
}