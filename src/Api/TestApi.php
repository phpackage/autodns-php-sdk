<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\JsonResponseData;

class TestApi extends AbstractApi
{
    public function hello()
    {
        $response = $this->client->get('hello');

        return $this->client->deserialize($response->body, JsonResponseData::class);
    }
}
