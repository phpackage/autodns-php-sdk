<?php

namespace Phpackage\Autodns\Xml\Model;

class BasicUser
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var int
     */
    private $context;

    /**
     * @return string
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

    /**
     * @return int
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
}
