<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\StatusType;

class Message
{
    /**
     * @var string The text
     */
    private $text;

    /**
     * @var Message[] The messages
     */
    private $messages = [];

    /**
     * @var GenericObject[] The objects
     */
    private $objects = [];

    /**
     * @var string The message code
     */
    private $code;

    /**
     * @see StatusType
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return self
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
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
     * @return self
     */
    public function addMessage(Message $message): self
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * @return GenericObject[]
     */
    public function getObjects(): array
    {
        return $this->objects;
    }

    /**
     * @param GenericObject[] $objects
     */
    public function setObjects(array $objects): void
    {
        $this->objects = $objects;
    }

    /**
     * @param GenericObject $object
     * @return self
     */
    public function addObject(GenericObject $object): self
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
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
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
