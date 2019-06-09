<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;

class Domain
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
    private $name;

    /**
     * @var string
     */
    private $idn;

    /**
     * @var string
     */
    private $nicMemberLabel;

    /**
     * @var string
     */
    private $registryStatus;

    /**
     * @var NameServer[]
     */
    private $nameServers = [];

    /**
     * @var TimePeriod
     */
    private $period;

    /**
     * @var bool
     */
    private $trustee;

    /**
     * @var bool
     */
    private $privacy;

    /**
     * @var string
     */
    private $authinfo;

    /**
     * @var bool
     */
    private $domainsafe;

    /**
     * @var string
     */
    private $parking;

    /**
     * @var string
     */
    private $registrarStatus;

    /**
     * @var Contact
     */
    private $ownerc;

    /**
     * @var Contact
     */
    private $adminc;

    /**
     * @var Contact
     */
    private $techc;

    /**
     * @var Contact
     */
    private $zonec;

    /**
     * @var DateTimeInterface
     */
    private $expire;

    /**
     * @var DateTimeInterface
     */
    private $payable;

    /**
     * @var string
     */
    private $action;

    /**
     * @var bool
     */
    private $autoDnsSec;

    /**
     * @var bool
     */
    private $dnssec;

    /**
     * @var bool
     */
    private $validCertificate;

    /**
     * @var string
     */
    private $cancelationStatus;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getIdn(): string
    {
        return $this->idn;
    }

    /**
     * @param string $idn
     */
    public function setIdn(string $idn): void
    {
        $this->idn = $idn;
    }

    /**
     * @return string
     */
    public function getNicMemberLabel(): string
    {
        return $this->nicMemberLabel;
    }

    /**
     * @param string $nicMemberLabel
     */
    public function setNicMemberLabel(string $nicMemberLabel): void
    {
        $this->nicMemberLabel = $nicMemberLabel;
    }

    /**
     * @return string
     */
    public function getRegistryStatus(): string
    {
        return $this->registryStatus;
    }

    /**
     * @param string $registryStatus
     */
    public function setRegistryStatus(string $registryStatus): void
    {
        $this->registryStatus = $registryStatus;
    }

    /**
     * @return NameServer[]
     */
    public function getNameServers(): array
    {
        return $this->nameServers;
    }

    /**
     * @param NameServer[] $nameServers
     */
    public function setNameServers(array $nameServers): void
    {
        $this->nameServers = $nameServers;
    }

    /**
     * @param NameServer $nameServer
     */
    public function addNameServer(NameServer $nameServer): void
    {
        $this->nameServers[] = $nameServer;
    }

    /**
     * @return TimePeriod
     */
    public function getPeriod(): TimePeriod
    {
        return $this->period;
    }

    /**
     * @param TimePeriod $period
     */
    public function setPeriod(TimePeriod $period): void
    {
        $this->period = $period;
    }

    /**
     * @return bool
     */
    public function isTrustee(): bool
    {
        return $this->trustee;
    }

    /**
     * @param bool $trustee
     */
    public function setTrustee(bool $trustee): void
    {
        $this->trustee = $trustee;
    }

    /**
     * @return bool
     */
    public function isPrivacy(): bool
    {
        return $this->privacy;
    }

    /**
     * @param bool $privacy
     */
    public function setPrivacy(bool $privacy): void
    {
        $this->privacy = $privacy;
    }

    /**
     * @return string
     */
    public function getAuthinfo(): string
    {
        return $this->authinfo;
    }

    /**
     * @param string $authinfo
     */
    public function setAuthinfo(string $authinfo): void
    {
        $this->authinfo = $authinfo;
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
     * @return string
     */
    public function getParking(): string
    {
        return $this->parking;
    }

    /**
     * @param string $parking
     */
    public function setParking(string $parking): void
    {
        $this->parking = $parking;
    }

    /**
     * @return string
     */
    public function getRegistrarStatus(): string
    {
        return $this->registrarStatus;
    }

    /**
     * @param string $registrarStatus
     */
    public function setRegistrarStatus(string $registrarStatus): void
    {
        $this->registrarStatus = $registrarStatus;
    }

    /**
     * @return Contact
     */
    public function getOwnerc(): Contact
    {
        return $this->ownerc;
    }

    /**
     * @param Contact $ownerc
     */
    public function setOwnerc(Contact $ownerc): void
    {
        $this->ownerc = $ownerc;
    }

    /**
     * @return Contact
     */
    public function getAdminc(): Contact
    {
        return $this->adminc;
    }

    /**
     * @param Contact $adminc
     */
    public function setAdminc(Contact $adminc): void
    {
        $this->adminc = $adminc;
    }

    /**
     * @return Contact
     */
    public function getTechc(): Contact
    {
        return $this->techc;
    }

    /**
     * @param Contact $techc
     */
    public function setTechc(Contact $techc): void
    {
        $this->techc = $techc;
    }

    /**
     * @return Contact
     */
    public function getZonec(): Contact
    {
        return $this->zonec;
    }

    /**
     * @param Contact $zonec
     */
    public function setZonec(Contact $zonec): void
    {
        $this->zonec = $zonec;
    }

    /**
     * @return DateTimeInterface
     */
    public function getExpire(): DateTimeInterface
    {
        return $this->expire;
    }

    /**
     * @param DateTimeInterface $expire
     */
    public function setExpire(DateTimeInterface $expire): void
    {
        $this->expire = $expire;
    }

    /**
     * @return DateTimeInterface
     */
    public function getPayable(): DateTimeInterface
    {
        return $this->payable;
    }

    /**
     * @param DateTimeInterface $payable
     */
    public function setPayable(DateTimeInterface $payable): void
    {
        $this->payable = $payable;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * @return bool
     */
    public function isAutoDnsSec(): bool
    {
        return $this->autoDnsSec;
    }

    /**
     * @param bool $autoDnsSec
     */
    public function setAutoDnsSec(bool $autoDnsSec): void
    {
        $this->autoDnsSec = $autoDnsSec;
    }

    /**
     * @return bool
     */
    public function isDnssec(): bool
    {
        return $this->dnssec;
    }

    /**
     * @param bool $dnssec
     */
    public function setDnssec(bool $dnssec): void
    {
        $this->dnssec = $dnssec;
    }

    /**
     * @return bool
     */
    public function isValidCertificate(): bool
    {
        return $this->validCertificate;
    }

    /**
     * @param bool $validCertificate
     */
    public function setValidCertificate(bool $validCertificate): void
    {
        $this->validCertificate = $validCertificate;
    }

    /**
     * @return string
     */
    public function getCancelationStatus(): string
    {
        return $this->cancelationStatus;
    }

    /**
     * @param string $cancelationStatus
     */
    public function setCancelationStatus(string $cancelationStatus): void
    {
        $this->cancelationStatus = $cancelationStatus;
    }
}
