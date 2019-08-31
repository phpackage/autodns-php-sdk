<?php

namespace Phpackage\Autodns\Model;

class NotifyMessage
{
    /**
     * @var string|null The specific message type
     */
    private $type;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
