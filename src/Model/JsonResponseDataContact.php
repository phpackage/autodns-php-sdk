<?php

namespace Phpackage\Autodns\Model;

class JsonResponseDataContact extends JsonResponseData
{
    /**
     * @param Contact $data
     */
    public function addData(Contact $data): void
    {
        $this->data[] = $data;
    }
}
