<?php

namespace Phpackage\Autodns\Model;

class JsonResponseData
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string
     */
    private $stid;
    /**
     * @var string
     */
    private $ctid;
    /**
     * @var Message[]
     */
    private $messages;
    /**
     * @var ResponseStatus
     */
    private $status;
    /**
     * @var ResponseObject
     */
    private $object;

    public function __construct()
    {
        $this->status = new ResponseStatus();
        $this->object = new ResponseObject();
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getStid(): string
    {
        return $this->stid;
    }

    /**
     * @param string $stid
     */
    public function setStid(string $stid): void
    {
        $this->stid = $stid;
    }

    /**
     * @return string
     */
    public function getCtid(): string
    {
        return $this->ctid;
    }

    /**
     * @param string $ctid
     */
    public function setCtid(string $ctid): void
    {
        $this->ctid = $ctid;
    }

    /**
     * @return Message[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param Message[] $messages
     */
    public function setMessages(array $messages): void
    {
        $this->messages = $messages;
    }

    /**
     * @param Message $message
     */
    public function addMessage(Message $message): void
    {
        $this->messages[] = $message;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus(): ResponseStatus
    {
        return $this->status;
    }

    /**
     * @param ResponseStatus $status
     */
    public function setStatus(ResponseStatus $status): void
    {
        $this->status = $status;
    }

    /**
     * @return ResponseObject
     */
    public function getObject(): ResponseObject
    {
        return $this->object;
    }

    /**
     * @param ResponseObject $object
     */
    public function setObject(ResponseObject $object): void
    {
        $this->object = $object;
    }
}