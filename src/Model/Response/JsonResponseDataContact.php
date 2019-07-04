<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\Contact;

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
