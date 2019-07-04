<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\DomainEnvelope;

class JsonResponseDataDomainEnvelope extends JsonResponseData
{
    /**
     * @param DomainEnvelope $data
     */
    public function addData(DomainEnvelope $data): void
    {
        $this->data[] = $data;
    }
}
