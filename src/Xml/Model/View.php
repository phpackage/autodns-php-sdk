<?php

namespace Phpackage\Autodns\Xml\Model;

class View
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $children;

    /**
     * @param int $offset
     * @param int $limit
     * @param int $children
     */
    public function __construct(int $offset = 0, int $limit = 30, int $children = 0)
    {
        $this->offset = $offset;
        $this->limit = $limit;
        $this->children = $children;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getChildren(): int
    {
        return $this->children;
    }

    /**
     * @param int $children
     */
    public function setChildren(int $children): void
    {
        $this->children = $children;
    }
}
