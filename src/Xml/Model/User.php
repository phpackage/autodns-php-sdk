<?php

namespace Phpackage\Autodns\Xml\Model;

class User
{
    const STATUS_MASTER = 0;
    const STATUS_ADMIN = 1;
    const STATUS_NORMAL = 2;

    const SUBSTATUS_PLUS = 0;
    const SUBSTATUS_STAR = 1;
    const SUBSTATUS_NORMAL = 2;
    const SUBSTATUS_CLONE = 3;

    const LANGUAGE_GERMAN = 'de';
    const LANGUAGE_ENGLISH = 'en';
    const LANGUAGE_SPANISH = 'es';

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
    private $status = self::STATUS_NORMAL;

    /**
     * @var int
     */
    private $substatus = self::SUBSTATUS_NORMAL;

    /**
     * @var string
     */
    private $defaultMail;

    /**
     * @var string
     */
    private $language = self::LANGUAGE_ENGLISH;

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
     * @return string
     */
    public function getPassword(): ?string
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
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getSubstatus(): ?int
    {
        return $this->substatus;
    }

    /**
     * @param int $substatus
     */
    public function setSubstatus(int $substatus): void
    {
        $this->substatus = $substatus;
    }

    /**
     * @return string
     */
    public function getDefaultMail(): ?string
    {
        return $this->defaultMail;
    }

    /**
     * @param string $defaultMail
     */
    public function setDefaultMail(string $defaultMail): void
    {
        $this->defaultMail = $defaultMail;
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
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
}
