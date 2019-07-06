<?php

namespace Phpackage\Autodns\Xml\Model;

class User extends BasicUser
{
    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $status = UserStatusConstants::STATUS_NORMAL;

    /**
     * @var int
     */
    private $substatus = UserSubstatusConstants::SUB_STATUS_NORMAL;

    /**
     * @var string
     */
    private $defaultMail;

    /**
     * @var string
     */
    private $language = UserLanguageConstants::ENGLISH;

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
