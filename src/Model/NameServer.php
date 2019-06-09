<?php

namespace Phpackage\Autodns\Model;

class NameServer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $ttl;

    /**
     * @var string[]
     */
    private $ipAddresses = [];

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
     * @return string[]
     */
    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    /**
     * @param string[] $ipAddresses
     */
    public function setIpAddresses(array $ipAddresses): void
    {
        $this->ipAddresses = $ipAddresses;
    }

    /**
     * @param string $ipAddress
     */
    public function addIpAddress(string $ipAddress): void
    {
        $this->ipAddresses[] = $ipAddress;
    }
}