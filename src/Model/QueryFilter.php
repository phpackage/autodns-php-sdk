<?php

namespace Phpackage\Autodns\Model;

class QueryFilter
{
    /**
     * @var string|null
     */
    private $key;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $operator;

    /**
     * @var string|null
     */
    private $link;

    /**
     * @var QueryFilter[]
     */
    private $filters = [];

    public function __construct(
        ?string $key = null,
        ?string $value = null,
        ?string $operator = null
    ) {
        $this->key = $key;
        $this->value = $value;
        $this->operator = $operator;
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
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
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
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
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
     * @return self
     */
    public function setOperator(string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return QueryFilter[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @param QueryFilter[] $filters
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param QueryFilter $filter
     * @return self
     */
    public function addFilter(QueryFilter $filter): self
    {
        $this->filters[] = $filter;

        return $this;
    }
}
