<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSourceGeo extends AbstractDomainStudioSource
{
    /**
     * @var int The maximum amount of fetched geo domains
     */
    private $max;

    /**
     * @return int
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }
}
