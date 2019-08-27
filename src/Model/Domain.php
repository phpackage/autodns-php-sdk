<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;
use Phpackage\Autodns\Model\Enum\AutoRenewStatusConstants;

class Domain
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
    private $name;

    /**
     * @var string|null
     */
    private $idn;

    /**
     * @var string|null
     */
    private $nicMemberLabel;

    /**
     * @var string|null
     */
    private $registryStatus;

    /**
     * @var NameServer[]
     */
    private $nameServers = [];

    /**
     * @var TimePeriod|null
     */
    private $period;

    /**
     * @var bool|null
     */
    private $trustee;

    /**
     * @var bool|null
     */
    private $privacy;

    /**
     * @var string|null
     */
    private $authinfo;

    /**
     * @var bool|null
     */
    private $domainsafe;

    /**
     * @var string|null
     */
    private $parking;

    /**
     * @var string|null
     */
    private $registrarStatus;

    /**
     * @var Contact|null
     */
    private $ownerc;

    /**
     * @var Contact|null
     */
    private $adminc;

    /**
     * @var Contact|null
     */
    private $techc;

    /**
     * @var Contact|null
     */
    private $zonec;

    /**
     * @var DateTimeInterface|null
     */
    private $expire;

    /**
     * @var DateTimeInterface|null
     */
    private $payable;

    /**
     * @var string|null
     */
    private $action;

    /**
     * @var bool|null
     */
    private $autoDnsSec;

    /**
     * @var bool|null
     */
    private $dnssec;

    /**
     * @var bool|null
     */
    private $validCertificate;

    /**
     * @var string|null
     */
    private $cancelationStatus;

    /**
     * @var string|null
     * @see AutoRenewStatusConstants
     */
    private $autoRenewStatus;

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
    public function getName(): ?string
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
     * @return string|null
     */
    public function getIdn(): ?string
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
     * @return string|null
     */
    public function getNicMemberLabel(): ?string
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
     * @return string|null
     */
    public function getRegistryStatus(): ?string
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
     * @return NameServer[]|null
     */
    public function getNameServers(): ?array
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
     * @return TimePeriod|null
     */
    public function getPeriod(): ?TimePeriod
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
     * @return bool|null
     */
    public function getTrustee(): ?bool
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
     * @return bool|null
     */
    public function getPrivacy(): ?bool
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
     * @return string|null
     */
    public function getAuthinfo(): ?string
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
     * @return bool|null
     */
    public function isDomainsafe(): ?bool
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
     * @return string|null
     */
    public function getParking(): ?string
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
     * @return string|null
     */
    public function getRegistrarStatus(): ?string
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
     * @return Contact|null
     */
    public function getOwnerc(): ?Contact
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
     * @return Contact|null
     */
    public function getAdminc(): ?Contact
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
     * @return Contact|null
     */
    public function getTechc(): ?Contact
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
     * @return Contact|null
     */
    public function getZonec(): ?Contact
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
     * @return DateTimeInterface|null
     */
    public function getExpire(): ?DateTimeInterface
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
     * @return DateTimeInterface|null
     */
    public function getPayable(): ?DateTimeInterface
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
     * @return string|null
     */
    public function getAction(): ?string
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
     * @return bool|null
     */
    public function isAutoDnsSec(): ?bool
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
     * @return bool|null
     */
    public function isDnssec(): ?bool
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
     * @return bool|null
     */
    public function isValidCertificate(): ?bool
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
     * @return string|null
     */
    public function getCancelationStatus(): ?string
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

    /**
     * @return string|null
     */
    public function getAutoRenewStatus(): ?string
    {
        return $this->autoRenewStatus;
    }

    /**
     * @param string $autoRenewStatus
     */
    public function setAutoRenewStatus(string $autoRenewStatus): void
    {
        $this->autoRenewStatus = $autoRenewStatus;
    }
}
