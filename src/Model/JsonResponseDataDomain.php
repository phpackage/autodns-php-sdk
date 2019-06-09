<?php

namespace Phpackage\Autodns\Model;

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
