<?php

namespace Phpackage\Autodns\Model\Response;

class JsonResponseDataString extends JsonResponseData
{
    /**
     * @param string $data
     */
    public function addData(string $data): void
    {
        $this->data[] = $data;
    }
}
