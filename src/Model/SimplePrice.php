<?php

namespace Phpackage\Autodns\Model;

class SimplePrice
{
    /**
     * @var Price
     */
    private $price;

    /**
     * @var string The business case
     */
    private $businessCase;

    /**
     * @return Price
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getBusinessCase(): ?string
    {
        return $this->businessCase;
    }

    /**
     * @param string $businessCase
     */
    public function setBusinessCase(string $businessCase): void
    {
        $this->businessCase = $businessCase;
    }
}
