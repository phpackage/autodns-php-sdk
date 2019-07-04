<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\Domain;

class JsonResponseDataDomain extends JsonResponseData
{
    /**
     * @param Domain $data
     */
    public function addData(Domain $data): void
    {
        $this->data[] = $data;
    }
}
