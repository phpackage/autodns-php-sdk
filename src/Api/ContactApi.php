<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Response\JsonResponseDataContact;
use Phpackage\Autodns\Model\Query;

class ContactApi extends AbstractApi
{
    public function search(Query $query)
    {
        $response = $this->client->post('contact/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }

    public function get(int $id)
    {
        $response = $this->client->get('contact/' . $id);

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }
}
