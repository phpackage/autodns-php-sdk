<?php

namespace Phpackage\Autodns\Model;

class DomainStudioService
{
    /**
     * @var WhoisServiceData
     */
    private $whois;

    /**
     * @var PriceServiceData
     */
    private $price;

    /**
     * @var EstimationServiceData
     */
    private $estimation;

    /**
     * @return WhoisServiceData
     */
    public function getWhois(): ?WhoisServiceData
    {
        return $this->whois;
    }

    /**
     * @param WhoisServiceData $whois
     */
    public function setWhois(WhoisServiceData $whois): void
    {
        $this->whois = $whois;
    }

    /**
     * @return PriceServiceData
     */
    public function getPrice(): ?PriceServiceData
    {
        return $this->price;
    }

    /**
     * @param PriceServiceData $price
     */
    public function setPrice(PriceServiceData $price): void
    {
        $this->price = $price;
    }

    /**
     * @return EstimationServiceData
     */
    public function getEstimation(): ?EstimationServiceData
    {
        return $this->estimation;
    }

    /**
     * @param EstimationServiceData $estimation
     */
    public function setEstimation(EstimationServiceData $estimation): void
    {
        $this->estimation = $estimation;
    }
}
