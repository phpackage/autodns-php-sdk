<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Response\JsonResponseDataJsonNoData;
use Phpackage\Autodns\Model\Response\JsonResponseDataPollMessage;

class PollApi extends AbstractApi
{
    public function get(): JsonResponseDataPollMessage
    {
        $response = $this->client->get('poll');

        return $this->client->deserialize($response->body, JsonResponseDataPollMessage::class);
    }

    public function put(int $id): JsonResponseDataJsonNoData
    {
        $response = $this->client->put('poll/' . $id, null);

        return $this->client->deserialize($response->body, JsonResponseDataJsonNoData::class);
    }
}
