<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\JsonNoData;

class JsonResponseDataJsonNoData extends JsonResponseData
{
    /**
     * @param JsonNoData $data
     */
    public function addData(JsonNoData $data): void
    {
        $this->data[] = $data;
    }
}
