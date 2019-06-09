<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\JsonResponseDataDomain;
use Phpackage\Autodns\Model\Query;

class DomainApi extends AbstractApi
{
    public function search(Query $query)
    {
        $response = $this->client->post('domain/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }

    public function get(string $name)
    {
        $response = $this->client->get('domain/' . $name);

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }
}
