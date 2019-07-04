<?php

namespace Phpackage\Autodns\Model;

class EstimationServiceData extends AbstractServiceData
{
    /**
     * @var EstimationData
     */
    private $data;

    /**
     * @return EstimationData
     */
    public function getData(): ?EstimationData
    {
        return $this->data;
    }

    /**
     * @param EstimationData $data
     */
    public function setData(EstimationData $data): void
    {
        $this->data = $data;
    }
}
