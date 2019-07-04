<?php

namespace Phpackage\Autodns\Model\Request;

use Phpackage\Autodns\Model\DomainStudioSources;

class DomainEnvelopeSearchRequest
{
    /**
     * @var string Domain search token
     */
    private $searchToken;

    /**
     * @var string The currency for every price lookup
     */
    private $currency;

    /**
     * @var bool Activates debugging
     */
    private $debug;

    /**
     * @var DomainStudioSources
     */
    private $sources;

    /**
     * @return string
     */
    public function getSearchToken(): ?string
    {
        return $this->searchToken;
    }

    /**
     * @param string $searchToken
     */
    public function setSearchToken(string $searchToken): void
    {
        $this->searchToken = $searchToken;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function isDebug(): ?bool
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     */
    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }

    /**
     * @return DomainStudioSources
     */
    public function getSources(): ?DomainStudioSources
    {
        return $this->sources;
    }

    /**
     * @param DomainStudioSources $sources
     */
    public function setSources(DomainStudioSources $sources): void
    {
        $this->sources = $sources;
    }
}
