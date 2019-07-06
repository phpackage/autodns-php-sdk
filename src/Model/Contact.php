<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;

class Contact
{
    /**
     * @var DateTimeInterface|null
     */
    private $created;

    /**
     * @var DateTimeInterface|null
     */
    private $updated;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var BasicUser|null
     */
    private $owner;

    /**
     * @var BasicUser|null
     */
    private $updater;

    /**
     * @var string|null
     */
    private $alias;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $organization;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $protection;

    /**
     * @var string|null
     */
    private $sip;

    /**
     * @var string|null
     */
    private $verification;

    /**
     * @var string|null
     */
    private $fname;

    /**
     * @var string|null
     */
    private $lname;

    /**
     * @var string[]
     */
    private $address;

    /**
     * @var string|null
     */
    private $pcode;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $fax;

    /**
     * @var ContactReference[]
     */
    private $nicRef = [];

    /**
     * @return DateTimeInterface|null
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
     * @return DateTimeInterface|null
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
     * @return int|null
     */
    public function getId(): ?int
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
     * @return BasicUser|null
     */
    public function getOwner(): ?BasicUser
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
     * @return BasicUser|null
     */
    public function getUpdater(): ?BasicUser
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
     * @return string|null
     */
    public function getAlias(): ?string
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
     * @return string|null
     */
    public function getType(): ?string
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
     * @return string|null
     */
    public function getOrganization(): ?string
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
     * @return string|null
     */
    public function getTitle(): ?string
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
     * @return string|null
     */
    public function getCity(): ?string
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
     * @return string|null
     */
    public function getCountry(): ?string
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
     * @return string|null
     */
    public function getState(): ?string
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
     * @return string|null
     */
    public function getEmail(): ?string
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
     * @return string|null
     */
    public function getProtection(): ?string
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
     * @return string|null
     */
    public function getSip(): ?string
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
     * @return string|null
     */
    public function getVerification(): ?string
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
     * @return string|null
     */
    public function getFname(): ?string
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
     * @return string|null
     */
    public function getLname(): ?string
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
     * @return string|null
     */
    public function getPcode(): ?string
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
     * @return string|null
     */
    public function getPhone(): ?string
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
     * @return string|null
     */
    public function getFax(): ?string
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

    /**
     * @return ContactReference[]
     */
    public function getNicRef(): array
    {
        return $this->nicRef;
    }

    /**
     * @param ContactReference[] $nicRef
     */
    public function setNicRef(array $nicRef): void
    {
        $this->nicRef = $nicRef;
    }

    /**
     * @param ContactReference $nicRef
     */
    public function addNicRef(ContactReference $nicRef): void
    {
        $this->nicRef[] = $nicRef;
    }
}
