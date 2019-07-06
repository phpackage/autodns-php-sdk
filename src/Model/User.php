<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;

class User extends BasicUser
{
    /**
     * @var DateTimeInterface
     */
    private $created;

    /**
     * @var DateTimeInterface
     */
    private $updated;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $defaultEmail;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $substatus;

    /**
     * @var string
     */
    private $authType;

    /**
     * @var UserDetails
     */
    private $details;

    /**
     * @var string
     */
    private $language;

    /**
     * @return DateTimeInterface
     */
    public function getCreated(): ?DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @param DateTimeInterface $created
     */
    public function setCreated(DateTimeInterface $created): void
    {
        $this->created = $created;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdated(): ?DateTimeInterface
    {
        return $this->updated;
    }

    /**
     * @param DateTimeInterface $updated
     */
    public function setUpdated(DateTimeInterface $updated): void
    {
        $this->updated = $updated;
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
     * @return string
     */
    public function getDefaultEmail(): ?string
    {
        return $this->defaultEmail;
    }

    /**
     * @param string $defaultEmail
     */
    public function setDefaultEmail(string $defaultEmail): void
    {
        $this->defaultEmail = $defaultEmail;
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
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param string $authType
     */
    public function setAuthType(string $authType): void
    {
        $this->authType = $authType;
    }

    /**
     * @return UserDetails
     */
    public function getDetails(): ?UserDetails
    {
        return $this->details;
    }

    /**
     * @param UserDetails $details
     */
    public function setDetails(UserDetails $details): void
    {
        $this->details = $details;
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
