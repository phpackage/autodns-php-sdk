<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\PollMessage;

class JsonResponseDataPollMessage extends JsonResponseData
{
    /**
     * @param PollMessage $data
     */
    public function addData(PollMessage $data): void
    {
        $this->data[] = $data;
    }
}
