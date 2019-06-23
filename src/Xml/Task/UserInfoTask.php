<?php

namespace Phpackage\Autodns\Xml\Task;

use Phpackage\Autodns\Xml\Model\BasicUser;

class UserInfoTask extends Task
{
    const CODE = '1301004';

    /**
     * @var BasicUser
     */
    private $user;

    public function __construct()
    {
        parent::__construct(self::CODE);
    }

    /**
     * @return BasicUser
     */
    public function getUser(): BasicUser
    {
        return $this->user;
    }

    /**
     * @param BasicUser $user
     */
    public function setUser(BasicUser $user): void
    {
        $this->user = $user;
    }
}
