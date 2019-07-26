<?php

namespace Phpackage\Autodns\Model;

class MainIp
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var int The ttl of main address to use
     */
    private $ttl;

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
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
}
