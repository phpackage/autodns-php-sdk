<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\DomainEnvelope;
use Phpackage\Autodns\Model\JsonResponseData;

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
