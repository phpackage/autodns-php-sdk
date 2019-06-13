<?php

namespace Phpackage\Autodns\Model;

class TimePeriod
{
    /**
     * @var string|null
     */
    private $unit;

    /**
     * @var int|null
     */
    private $period;

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
