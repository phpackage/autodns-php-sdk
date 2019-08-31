<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Domain;
use Phpackage\Autodns\Model\Query;
use Phpackage\Autodns\Model\Response\JsonResponseDataDomain;
use Phpackage\Autodns\Model\Response\JsonResponseDataJsonNoData;

class DomainApi extends AbstractApi
{
    public function search(Query $query): JsonResponseDataDomain
    {
        $response = $this->client->post('domain/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }

    public function get(string $name): JsonResponseDataDomain
    {
        $response = $this->client->get('domain/' . $name);

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }

    public function create(Domain $domain): JsonResponseDataDomain
    {
        $response = $this->client->post('domain', $this->client->serialize($domain));

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }

    public function update(Domain $domain): JsonResponseDataDomain
    {
        $response = $this->client->put('domain/' . $domain->getName(), $this->client->serialize($domain));

        return $this->client->deserialize($response->body, JsonResponseDataDomain::class);
    }

    public function delete(Domain $domain): JsonResponseDataJsonNoData
    {
        $response = $this->client->delete('domain/' . $domain->getName());

        return $this->client->deserialize($response->body, JsonResponseDataJsonNoData::class);
    }
}
