<?php

namespace Phpackage\Autodns\Model;

class Soa
{
    /**
     * @var int The seconds after the secondary should refresh the zone data
     */
    private $refresh;

    /**
     * @var int The seconds after the secondary should retry the zone data after the refresh has been timeouts
     */
    private $retry;

    /**
     * @var int The seconds after the zone data will not be delievered, if the zone could not be reached on the master
     */
    private $expire;

    /**
     * @var int
     */
    private $ttl;

    /**
     * @var string The email address of the responsible of the zone
     */
    private $email;

    /**
     * @return int
     */
    public function getRefresh(): int
    {
        return $this->refresh;
    }

    /**
     * @param int $refresh
     */
    public function setRefresh(int $refresh): void
    {
        $this->refresh = $refresh;
    }

    /**
     * @return int
     */
    public function getRetry(): int
    {
        return $this->retry;
    }

    /**
     * @param int $retry
     */
    public function setRetry(int $retry): void
    {
        $this->retry = $retry;
    }

    /**
     * @return int
     */
    public function getExpire(): int
    {
        return $this->expire;
    }

    /**
     * @param int $expire
     */
    public function setExpire(int $expire): void
    {
        $this->expire = $expire;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
