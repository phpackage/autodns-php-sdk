<?php

namespace Phpackage\Autodns\Model;

use Phpackage\Autodns\Model\Enum\PriceTypeConstants;

class Price
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     * @see PriceTypeConstants
     */
    private $type;

    /**
     * @var string
     */
    private $currency;

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
}
