<?php

namespace Phpackage\Autodns\Model;

class WhoisServiceData extends AbstractServiceData
{
    /**
     * @var WhoisStatus
     */
    private $data;

    /**
     * @return WhoisStatus
     */
    public function getData(): ?WhoisStatus
    {
        return $this->data;
    }

    /**
     * @param WhoisStatus $data
     */
    public function setData(WhoisStatus $data): void
    {
        $this->data = $data;
    }
}
