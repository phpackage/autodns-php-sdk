<?php

namespace Phpackage\Autodns\Xml\Model;

class Where
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var string
     */
    private $value;

    /**
     * @var Where[]
     */
    private $and;

    /**
     * @var Where[]
     */
    private $or;

    /**
     * @param string $key
     * @param string $operator
     * @param string $value
     */
    public function __construct(string $key = null, string $operator = null, string $value = null)
    {
        $this->key = $key;
        $this->operator = $operator;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey(): ?string
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
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator(string $operator): void
    {
        $this->operator = $operator;
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
     * @return Where[]
     */
    public function getAnd(): ?array
    {
        return $this->and;
    }

    /**
     * @param Where[] $and
     */
    public function setAnd(array $and): void
    {
        $this->and = $and;
    }

    /**
     * @param Where $and
     */
    public function addAnd(Where $and): void
    {
        $this->and[] = $and;
    }

    /**
     * @return Where[]
     */
    public function getOr(): ?array
    {
        return $this->or;
    }

    /**
     * @param Where[] $or
     */
    public function setOr(array $or): void
    {
        $this->or = $or;
    }

    /**
     * @param Where $or
     */
    public function addOr(Where $or): void
    {
        $this->or[] = $or;
    }
}
