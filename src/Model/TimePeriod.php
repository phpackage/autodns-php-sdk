<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\TimeUnitConstants;

class TimePeriod
{
    /**
     * @see TimeUnitConstants
     * @var string|null
     */
    private $unit;

    /**
     * @var int|null
     */
    private $period;

    /**
     * @param string $unit
     * @param int $period
     * @return TimePeriod
     */
    public static function create(string $unit, int $period)
    {
        $self = new self();
        $self->unit = $unit;
        $self->period = $period;

        return $self;
    }

    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * @param int $period
     * @return self
     */
    public function setPeriod(int $period): self
    {
        $this->period = $period;

        return $this;
    }
}
