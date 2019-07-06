<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\ContactReferenceType;
use Phpackage\Autodns\Model\Enum\ObjectStatus;

class ContactReference
{
    /**
     * @var NicMember
     */
    private $nic;

    /**
     * @var string
     * @see ObjectStatus
     */
    private $status;

    /**
     * @var string
     * @see ContactReferenceType
     */
    private $type;

    /**
     * @var string
     * @see ContactReferenceType
     */
    private $role;

    /**
     * @var string
     */
    private $name;

    /**
     * @return NicMember
     */
    public function getNic(): ?NicMember
    {
        return $this->nic;
    }

    /**
     * @param NicMember $nic
     */
    public function setNic(NicMember $nic): void
    {
        $this->nic = $nic;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
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
     * @return string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
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
}
