<?php

namespace Phpackage\Autodns\Xml\Model;

class Response
{
    /**
     * @var Result[]
     */
    private $result;

    /**
     * @return Result[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param Result[] $result
     */
    public function setResult(array $result): void
    {
        $this->result = $result;
    }

    /**
     * @param Result $result
     */
    public function addResult(Result $result): void
    {
        $this->result[] = $result;
    }
}
