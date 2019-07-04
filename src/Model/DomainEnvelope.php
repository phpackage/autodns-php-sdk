<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\DomainStudioDomainSource;

class DomainEnvelope
{
    /**
     * @var string The domain
     */
    private $domain;

    /**
     * @var string The unicode domain name
     */
    private $idn;

    /**
     * @var string
     * @see DomainStudioDomainSource
     */
    private $source;

    /**
     * @var DomainStudioService
     */
    private $services;

    /**
     * @var int The processing time for this domain
     */
    private $debugTime;

    /**
     * @return string
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getIdn(): ?string
    {
        return $this->idn;
    }

    /**
     * @param string $idn
     */
    public function setIdn(string $idn): void
    {
        $this->idn = $idn;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return DomainStudioService
     */
    public function getServices(): ?DomainStudioService
    {
        return $this->services;
    }

    /**
     * @param DomainStudioService $services
     */
    public function setServices(DomainStudioService $services): void
    {
        $this->services = $services;
    }

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
}
