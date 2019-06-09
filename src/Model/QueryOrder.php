<?php

namespace Phpackage\Autodns\Model;

class QueryOrder
{
    /**
     * @var string|null
     */
    private $key;

    /**
     * @var array
     */
    private $ins = [];

    /**
     * @var string|null
     */
    private $type;

    public function __construct(?string $key = null, ?string $type = null)
    {
        $this->key = $key;
        $this->type = $type;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function getIns(): array
    {
        return $this->ins;
    }

    public function addIn(string $in)
    {
        $this->ins[] = $in;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
