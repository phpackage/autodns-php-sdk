<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;
use Phpackage\Autodns\Model\Enum\NameserverActionConstants;

class Zone
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
     * @var string Zone name
     */
    private $origin;

    /**
     * @var string The idn version of the origin
     */
    private $idn;

    /**
     * @var Soa
     */
    private $soa;

    /**
     * @var bool Enables dnssec
     */
    private $dnssec;

    /**
     * @var string The name of the name server group, if the zone is managed by
     */
    private $nameServerGroup;

    /**
     * @var bool Allow AXFR
     */
    private $allowTransfer;

    /**
     * @var BasicUser
     */
    private $owner;

    /**
     * @var BasicUser
     */
    private $updater;

    /**
     * @var int The unique identifier of the zone
     */
    private $Rowid;

    /**
     * @var int The id of the related log-entry
     */
    private $logId;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var bool true if the domain is represented in the domain safe
     */
    private $domainsafe;

    /**
     * @var string Nameserver, the zone is copied from via AXFR (for zone_import)
     */
    private $source;

    /**
     * @var string System name server to look up the zone to copy
     */
    private $sourceVirtualHostname;

    /**
     * @var NameServer[] List of name servers
     */
    private $nameServers = [];

    /**
     * @var MainIp
     */
    private $main;

    /**
     * @var bool Automatic generation of resource records "www"
     */
    private $wwwInclude;

    /**
     * @var string The first nameserver managed by the system
     */
    private $virtualNameServer;

    /**
     * @var string[] The free text records
     */
    private $freeText;

    /**
     * @var string
     * @see NameserverActionConstants
     */
    private $action;

    /**
     * @var string[] The grants where transfer (axfr) can be done from
     */
    private $grants;

    /**
     * @var ResourceRecord[] The resource records
     */
    private $resourceRecords = [];

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
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     */
    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
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
     * @return Soa
     */
    public function getSoa(): Soa
    {
        return $this->soa;
    }

    /**
     * @param Soa $soa
     */
    public function setSoa(Soa $soa): void
    {
        $this->soa = $soa;
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
     * @return string
     */
    public function getNameServerGroup(): string
    {
        return $this->nameServerGroup;
    }

    /**
     * @param string $nameServerGroup
     */
    public function setNameServerGroup(string $nameServerGroup): void
    {
        $this->nameServerGroup = $nameServerGroup;
    }

    /**
     * @return bool
     */
    public function isAllowTransfer(): bool
    {
        return $this->allowTransfer;
    }

    /**
     * @param bool $allowTransfer
     */
    public function setAllowTransfer(bool $allowTransfer): void
    {
        $this->allowTransfer = $allowTransfer;
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
     * @return int
     */
    public function getRowid(): int
    {
        return $this->Rowid;
    }

    /**
     * @param int $Rowid
     */
    public function setRowid(int $Rowid): void
    {
        $this->Rowid = $Rowid;
    }

    /**
     * @return int
     */
    public function getLogId(): int
    {
        return $this->logId;
    }

    /**
     * @param int $logId
     */
    public function setLogId(int $logId): void
    {
        $this->logId = $logId;
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
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getSourceVirtualHostname(): string
    {
        return $this->sourceVirtualHostname;
    }

    /**
     * @param string $sourceVirtualHostname
     */
    public function setSourceVirtualHostname(string $sourceVirtualHostname): void
    {
        $this->sourceVirtualHostname = $sourceVirtualHostname;
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
    public function addNameServers(NameServer $nameServer): void
    {
        $this->nameServers[] = $nameServer;
    }

    /**
     * @return MainIp
     */
    public function getMain(): MainIp
    {
        return $this->main;
    }

    /**
     * @param MainIp $main
     */
    public function setMain(MainIp $main): void
    {
        $this->main = $main;
    }

    /**
     * @return bool
     */
    public function isWwwInclude(): bool
    {
        return $this->wwwInclude;
    }

    /**
     * @param bool $wwwInclude
     */
    public function setWwwInclude(bool $wwwInclude): void
    {
        $this->wwwInclude = $wwwInclude;
    }

    /**
     * @return string
     */
    public function getVirtualNameServer(): string
    {
        return $this->virtualNameServer;
    }

    /**
     * @param string $virtualNameServer
     */
    public function setVirtualNameServer(string $virtualNameServer): void
    {
        $this->virtualNameServer = $virtualNameServer;
    }

    /**
     * @return string[]
     */
    public function getFreeText(): array
    {
        return $this->freeText;
    }

    /**
     * @param string[] $freeText
     */
    public function setFreeText(array $freeText): void
    {
        $this->freeText = $freeText;
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
     * @return string[]
     */
    public function getGrants(): array
    {
        return $this->grants;
    }

    /**
     * @param string[] $grants
     */
    public function setGrants(array $grants): void
    {
        $this->grants = $grants;
    }

    /**
     * @return ResourceRecord[]
     */
    public function getResourceRecords(): array
    {
        return $this->resourceRecords;
    }

    /**
     * @param ResourceRecord[] $resourceRecords
     */
    public function setResourceRecords(array $resourceRecords): void
    {
        $this->resourceRecords = $resourceRecords;
    }

    /**
     * @param ResourceRecord $resourceRecord
     */
    public function addResourceRecord(ResourceRecord $resourceRecord): void
    {
        $this->resourceRecords[] = $resourceRecord;
    }
}
