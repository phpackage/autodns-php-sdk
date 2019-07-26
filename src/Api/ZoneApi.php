<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Zone;
use Phpackage\Autodns\Model\Query;
use Phpackage\Autodns\Model\Response\JsonResponseDataZone;
use Phpackage\Autodns\Model\Response\JsonResponseDataJsonNoData;

class ZoneApi extends AbstractApi
{
    public function create(Zone $zone): JsonResponseDataZone
    {
        $response = $this->client->post('zone', $this->client->serialize($zone));

        return $this->client->deserialize($response->body, JsonResponseDataZone::class);
    }

    public function search(Query $query): JsonResponseDataZone
    {
        $response = $this->client->post('zone/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataZone::class);
    }

    public function get(string $origin, string $virtualNameServer): JsonResponseDataZone
    {
        $response = $this->client->get(sprintf('zone/%s/%s', $origin, $virtualNameServer));

        return $this->client->deserialize($response->body, JsonResponseDataZone::class);
    }

    public function update(Zone $zone): JsonResponseDataZone
    {
        $response = $this->client->put(sprintf(
            'zone/%s/%s',
            $zone->getOrigin(),
            $zone->getVirtualNameServer()
        ), $this->client->serialize($zone));

        return $this->client->deserialize($response->body, JsonResponseDataZone::class);
    }

    public function delete(Zone $zone): JsonResponseDataJsonNoData
    {
        $response = $this->client->delete(sprintf(
            'zone/%s/%s',
            $zone->getOrigin(),
            $zone->getVirtualNameServer()
        ));

        return $this->client->deserialize($response->body, JsonResponseDataJsonNoData::class);
    }
}
