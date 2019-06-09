<?php

namespace Phpackage\Autodns\Model;

class TimePeriod
{
    /**
     * @var string
     */
    private $unit;

    /**
     * @var int
     */
    private $period;

    /**
     * @return string
     */
    public function getUnit(): string
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
     * @return int
     */
    public function getPeriod(): int
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
