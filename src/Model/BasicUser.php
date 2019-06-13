<?php

namespace Phpackage\Autodns\Model;

class BasicUser
{
    /**
     * @var int|null
     */
    private $context;

    /**
     * @var string|null
     */
    private $user;

    /**
     * @return int|null
     */
    public function getContext(): ?int
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
     * @return string|null
     */
    public function getUser(): ?string
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
