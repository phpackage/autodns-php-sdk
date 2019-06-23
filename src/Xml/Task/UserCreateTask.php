<?php

namespace Phpackage\Autodns\Xml\Task;

use Phpackage\Autodns\Xml\Model\User;

class UserCreateTask extends Task
{
    const CODE = '1301001';

    /**
     * @var User
     */
    private $user;

    public function __construct()
    {
        parent::__construct(self::CODE);
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}
