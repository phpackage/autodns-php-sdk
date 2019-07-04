<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\DomainEnvelopeSearchService;

abstract class AbstractDomainStudioSource
{
    /**
     * @var string[] The services to fetch extra data from for this source
     * @see DomainEnvelopeSearchService
     */
    private $services;

    /**
     * @return string[]
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * @param string[] $services
     */
    public function setServices(array $services): void
    {
        $this->services = $services;
    }
}
