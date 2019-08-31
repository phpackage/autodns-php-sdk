<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;
use Phpackage\Autodns\Model\Enum\JobStatusConstants;

class WorkflowSpool
{
    /**
     * @var DateTimeInterface|null The created date
     */
    private $created;

    /**
     * @var DateTimeInterface|null The updated date
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
     * @see JobStatusConstants
     * @var string|null
     */
    private $status;

    /**
     * @var string|null The substatus of the job
     */
    private $subStatus;

    /**
     * @var DateTimeInterface|null The next execution date of the job
     */
    private $execution;

    /**
     * @var int|null The job id
     */
    private $id;

    /**
     * @return DateTimeInterface|null
     */
    public function getCreated(): ?DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdated(): ?DateTimeInterface
    {
        return $this->updated;
    }

    /**
     * @return BasicUser|null
     */
    public function getOwner(): ?BasicUser
    {
        return $this->owner;
    }

    /**
     * @return BasicUser|null
     */
    public function getUpdater(): ?BasicUser
    {
        return $this->updater;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getSubStatus(): ?string
    {
        return $this->subStatus;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getExecution(): ?DateTimeInterface
    {
        return $this->execution;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
