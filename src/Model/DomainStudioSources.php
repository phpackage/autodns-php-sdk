<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSources
{
    /**
     * @var DomainStudioSourceInitial
     */
    private $initial;

    /**
     * @var DomainStudioSourceSuggestion
     */
    private $suggestion;

    /**
     * @var DomainStudioSourcePremium
     */
    private $premium;

    /**
     * @var DomainStudioSourceGeo
     */
    private $geo;

    /**
     * @var DomainStudioSourceSimilar
     */
    private $similar;

    /**
     * @return DomainStudioSourceInitial
     */
    public function getInitial(): ?DomainStudioSourceInitial
    {
        return $this->initial;
    }

    /**
     * @param DomainStudioSourceInitial $initial
     */
    public function setInitial(DomainStudioSourceInitial $initial): void
    {
        $this->initial = $initial;
    }

    /**
     * @return DomainStudioSourceSuggestion
     */
    public function getSuggestion(): ?DomainStudioSourceSuggestion
    {
        return $this->suggestion;
    }

    /**
     * @param DomainStudioSourceSuggestion $suggestion
     */
    public function setSuggestion(DomainStudioSourceSuggestion $suggestion): void
    {
        $this->suggestion = $suggestion;
    }

    /**
     * @return DomainStudioSourcePremium
     */
    public function getPremium(): ?DomainStudioSourcePremium
    {
        return $this->premium;
    }

    /**
     * @param DomainStudioSourcePremium $premium
     */
    public function setPremium(DomainStudioSourcePremium $premium): void
    {
        $this->premium = $premium;
    }

    /**
     * @return DomainStudioSourceGeo
     */
    public function getGeo(): ?DomainStudioSourceGeo
    {
        return $this->geo;
    }

    /**
     * @param DomainStudioSourceGeo $geo
     */
    public function setGeo(DomainStudioSourceGeo $geo): void
    {
        $this->geo = $geo;
    }

    /**
     * @return DomainStudioSourceSimilar
     */
    public function getSimilar(): ?DomainStudioSourceSimilar
    {
        return $this->similar;
    }

    /**
     * @param DomainStudioSourceSimilar $similar
     */
    public function setSimilar(DomainStudioSourceSimilar $similar): void
    {
        $this->similar = $similar;
    }
}
