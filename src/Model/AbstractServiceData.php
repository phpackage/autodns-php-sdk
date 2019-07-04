<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\DomainStudioServiceStatus;

abstract class AbstractServiceData
{
    /**
     * @var int The debug time
     */
    private $debugTime;

    /**
     * @var string
     * @see DomainStudioServiceStatus
     */
    private $status;

    /**
     * @return int
     */
    public function getDebugTime(): ?int
    {
        return $this->debugTime;
    }

    /**
     * @param int $debugTime
     */
    public function setDebugTime(int $debugTime): void
    {
        $this->debugTime = $debugTime;
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
}
