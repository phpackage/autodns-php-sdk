<?php

namespace Phpackage\Autodns\Xml\Model;

use Phpackage\Autodns\Xml\Task\Task;

class Request
{
    /**
     * @var Auth
     */
    private $auth;

    /**
     * @var string
     */
    private $language = 'en';

    /**
     * @var Task[]
     */
    private $task;

    /**
     * @return Auth
     */
    public function getAuth(): Auth
    {
        return $this->auth;
    }

    /**
     * @param Auth $auth
     */
    public function setAuth(Auth $auth): void
    {
        $this->auth = $auth;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return Task[]
     */
    public function getTask(): array
    {
        return $this->task;
    }

    /**
     * @param Task[] $task
     */
    public function setTask(array $task): void
    {
        $this->task = $task;
    }

    /**
     * @param Task $task
     */
    public function addTask(Task $task): void
    {
        $this->task[] = $task;
    }
}
