<?php

namespace Phpackage\Autodns\Model;

class QueryView
{
    /**
     * @var int
     */
    private $limit = 15;

    /**
     * @var int
     */
    private $offset = 0;

    /**
     * @var bool|null
     */
    private $children;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    public function __construct()
    {
        $this->from = date('Y-m-01');
        $this->to = date('Y-m-d');
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
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
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
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getChildren(): ?bool
    {
        return $this->children;
    }

    /**
     * @param bool $children
     * @return self
     */
    public function setChildren(?bool $children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->to = $to;

        return $this;
    }
}
