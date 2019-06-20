<?php

namespace Phpackage\Autodns\Xml\Model;

class Data
{
    /**
     * @var string[]
     */
    private $object;

    /**
     * @return string[]
     */
    public function getObject(): ?array
    {
        return $this->object;
    }

    /**
     * @param string[] $object
     */
    public function setObject(array $object): void
    {
        $this->object = $object;
    }
}
