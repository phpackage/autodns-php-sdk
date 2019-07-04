<?php

namespace Phpackage\Autodns\Model;

class PriceData
{
    /**
     * @var SimplePrice[]
     */
    private $prices = [];

    /**
     * @return SimplePrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param SimplePrice[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param SimplePrice $price
     */
    public function addPrice(SimplePrice $price): void
    {
        $this->prices[] = $price;
    }
}
