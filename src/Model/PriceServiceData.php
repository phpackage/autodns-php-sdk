<?php

namespace Phpackage\Autodns\Model;

class PriceServiceData extends AbstractServiceData
{
    /**
     * @var PriceData The subject products
     */
    private $data;

    /**
     * @return PriceData
     */
    public function getData(): ?PriceData
    {
        return $this->data;
    }

    /**
     * @param PriceData $data
     */
    public function setData(PriceData $data): void
    {
        $this->data = $data;
    }
}
