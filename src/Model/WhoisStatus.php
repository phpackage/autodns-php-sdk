<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\DomainStudioDomainStatus;

class WhoisStatus
{
    /**
     * @var string
     * @see DomainStudioDomainStatus
     */
    private $status;

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
}
