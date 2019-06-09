<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;

class Contact
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
     * @var int
     */
    private $id;

    /**
     * @var BasicUser
     */
    private $owner;

    /**
     * @var BasicUser
     */
    private $updater;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $organization;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $protection;

    /**
     * @var string
     */
    private $sip;

    /**
     * @var string[]
     */
    private $remarks;

    /**
     * @var bool
     */
    private $domainsafe;

    /**
     * @var bool
     */
    private $confirmOwnerConsent;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $verification;

    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $lname;

    /**
     * @var string[]
     */
    private $address;

    /**
     * @var string
     */
    private $pcode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $fax;

    /**
     * @return DateTimeInterface
     */
    public function getCreated(): DateTimeInterface
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
    public function getUpdated(): DateTimeInterface
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return BasicUser
     */
    public function getOwner(): BasicUser
    {
        return $this->owner;
    }

    /**
     * @param BasicUser $owner
     */
    public function setOwner(BasicUser $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return BasicUser
     */
    public function getUpdater(): BasicUser
    {
        return $this->updater;
    }

    /**
     * @param BasicUser $updater
     */
    public function setUpdater(BasicUser $updater): void
    {
        $this->updater = $updater;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization(string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getProtection(): string
    {
        return $this->protection;
    }

    /**
     * @param string $protection
     */
    public function setProtection(string $protection): void
    {
        $this->protection = $protection;
    }

    /**
     * @return string
     */
    public function getSip(): string
    {
        return $this->sip;
    }

    /**
     * @param string $sip
     */
    public function setSip(string $sip): void
    {
        $this->sip = $sip;
    }

    /**
     * @return string[]
     */
    public function getRemarks(): array
    {
        return $this->remarks;
    }

    /**
     * @param string[] $remarks
     */
    public function setRemarks(array $remarks): void
    {
        $this->remarks = $remarks;
    }

    /**
     * @return bool
     */
    public function isDomainsafe(): bool
    {
        return $this->domainsafe;
    }

    /**
     * @param bool $domainsafe
     */
    public function setDomainsafe(bool $domainsafe): void
    {
        $this->domainsafe = $domainsafe;
    }

    /**
     * @return bool
     */
    public function isConfirmOwnerConsent(): bool
    {
        return $this->confirmOwnerConsent;
    }

    /**
     * @param bool $confirmOwnerConsent
     */
    public function setConfirmOwnerConsent(bool $confirmOwnerConsent): void
    {
        $this->confirmOwnerConsent = $confirmOwnerConsent;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getVerification(): string
    {
        return $this->verification;
    }

    /**
     * @param string $verification
     */
    public function setVerification(string $verification): void
    {
        $this->verification = $verification;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    /**
     * @return string[]
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param string[] $address
     */
    public function setAddress(array $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPcode(): string
    {
        return $this->pcode;
    }

    /**
     * @param string $pcode
     */
    public function setPcode(string $pcode): void
    {
        $this->pcode = $pcode;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax(string $fax): void
    {
        $this->fax = $fax;
    }
}