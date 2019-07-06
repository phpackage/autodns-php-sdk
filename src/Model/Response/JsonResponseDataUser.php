<?php

namespace Phpackage\Autodns\Model\Response;

use Phpackage\Autodns\Model\User;

class JsonResponseDataUser extends JsonResponseData
{
    /**
     * @param User $data
     */
    public function addData(User $data): void
    {
        $this->data[] = $data;
    }
}
