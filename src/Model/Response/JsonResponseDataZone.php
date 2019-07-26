<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\Zone;

class JsonResponseDataZone extends JsonResponseData
{
    /**
     * @param Zone $data
     */
    public function addData(Zone $data): void
    {
        $this->data[] = $data;
    }
}
