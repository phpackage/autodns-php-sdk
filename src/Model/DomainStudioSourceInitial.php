<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSourceInitial extends AbstractDomainStudioSource
{
    /**
     * @var string[] Selected tlds
     */
    private $tlds;

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
