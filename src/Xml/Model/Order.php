<?php

namespace Phpackage\Autodns\Xml\Model;

class Order
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $mode;

    /**
     * @param string $key
     * @param string $mode
     */
    public function __construct(string $key, string $mode = 'asc')
    {
        $this->key = $key;
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode(string $mode): void
    {
        $this->mode = $mode;
    }
}
