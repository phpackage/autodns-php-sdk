<?php

namespace Phpackage\Autodns\Xml\Model;

class Auth
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $context;

    public function __construct(string $user, string $password, int $context)
    {
        $this->user = $user;
        $this->password = $password;
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

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

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
}
