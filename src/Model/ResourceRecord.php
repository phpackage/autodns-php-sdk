<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\ResourceRecordType;

class ResourceRecord
{
    /**
     * @var string The name of the record
     */
    private $name;

    /**
     * @var int TTL of the record (Optionally if not set then Default SOA TTL is used)
     */
    private $ttl;

    /**
     * @var string The type of the record, e.g. A
     * @see ResourceRecordType
     */
    private $type;

    /**
     * @var string The value of the record
     */
    private $value;

    /**
     * @var int Preference of the record, need for some record types e.g. MX
     */
    private $pref;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTtl(): int
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     */
    public function setTtl(int $ttl): void
    {
        $this->ttl = $ttl;
    }

    /**
     * @return string
     */
    public function getType(): string
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
    public function getValue(): string
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
    public function getPref(): int
    {
        return $this->pref;
    }

    /**
     * @param int $pref
     */
    public function setPref(int $pref): void
    {
        $this->pref = $pref;
    }
}
