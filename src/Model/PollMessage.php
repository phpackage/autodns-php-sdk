<?php

namespace Phpackage\Autodns\Model;

use DateTimeInterface;

class PollMessage
{
    /**
     * @var int|null The message id
     */
    private $id;

    /**
     * @var BasicUser|null
     */
    private $owner;

    /**
     * @var WorkflowSpool|null
     */
    private $job;

    /**
     * @var NotifyMessage|null
     */
    private $notify;

    /**
     * @var string The server transaction id
     */
    private $stid;

    /**
     * @var string The custom transaction id
     */
    private $ctid;

    /**
     * @var Message[] The general localized messages
     */
    private $messages = [];

    /**
     * @var string Optional message flags
     */
    private $flags;

    /**
     * @var DateTimeInterface|null The created date
     */
    private $created;

    /**
     * @var ResponseObject|null
     */
    private $object;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return BasicUser|null
     */
    public function getOwner(): ?BasicUser
    {
        return $this->owner;
    }

    /**
     * @return WorkflowSpool|null
     */
    public function getJob(): ?WorkflowSpool
    {
        return $this->job;
    }

    /**
     * @return NotifyMessage|null
     */
    public function getNotify(): ?NotifyMessage
    {
        return $this->notify;
    }

    /**
     * @return string
     */
    public function getStid(): string
    {
        return $this->stid;
    }

    /**
     * @return string
     */
    public function getCtid(): string
    {
        return $this->ctid;
    }

    /**
     * @return Message[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @return string
     */
    public function getFlags(): string
    {
        return $this->flags;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreated(): ?DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @return ResponseObject|null
     */
    public function getObject(): ?ResponseObject
    {
        return $this->object;
    }
}
