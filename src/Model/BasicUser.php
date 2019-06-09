<?php

namespace Phpackage\Autodns\Model;

class BasicUser
{
    /**
     * @var int
     */
    private $context;

    /**
     * @var string
     */
    private $user;

    /**
     * @return int
     */
    public function getContext(): int
    {
        return $this->context;
    }

    /**
     * @param int $context
     */
    public function setContext(int $context): void
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }
}
