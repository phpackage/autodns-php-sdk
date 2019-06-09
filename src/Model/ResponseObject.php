<?php

namespace Phpackage\Autodns\Model;

class ResponseObject
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @var int
     */
    private $summary;

    /**
     * @var object
     */
    private $data;

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getSummary(): ?int
    {
        return $this->summary;
    }

    /**
     * @param int $summary
     */
    public function setSummary(int $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @return object
     */
    public function getData(): object
    {
        return $this->data;
    }

    /**
     * @param object $data
     */
    public function setData(object $data): void
    {
        $this->data = $data;
    }
}
