<?php

namespace Phpackage\Autodns\Xml\Model;

class Result
{
    /**
     * @var Data[]
     */
    private $data;

    /**
     * @var Status
     */
    private $status;

    /**
     * @var Message[]
     */
    private $msg;

    /**
     * @return Data[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Data[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return Status
     */
    public function getStatus(): ?Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    /**
     * @return Message[]
     */
    public function getMsg(): ?array
    {
        return $this->msg;
    }

    /**
     * @param Message[] $msg
     */
    public function setMsg(array $msg): void
    {
        $this->msg = $msg;
    }

    /**
     * @param Message $msg
     */
    public function addMsg(Message $msg): void
    {
        $this->msg[] = $msg;
    }
}
