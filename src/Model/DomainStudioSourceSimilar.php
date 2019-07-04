<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSourceSimilar extends AbstractDomainStudioSource
{
    /**
     * @var int The maximum amount of generated similar domains
     */
    private $max;

    /**
     * @var string[] Selected tlds
     */
    private $tlds;

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

    /**
     * @return string[]
     */
    public function getTlds(): ?array
    {
        return $this->tlds;
    }

    /**
     * @param string[] $tlds
     */
    public function setTlds(array $tlds): void
    {
        $this->tlds = $tlds;
    }
}
