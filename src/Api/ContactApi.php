<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Contact;
use Phpackage\Autodns\Model\Query;
use Phpackage\Autodns\Model\Response\JsonResponseDataContact;
use Phpackage\Autodns\Model\Response\JsonResponseDataJsonNoData;

class ContactApi extends AbstractApi
{
    public function search(Query $query): JsonResponseDataContact
    {
        $response = $this->client->post('contact/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }

    public function get(int $id): JsonResponseDataContact
    {
        $response = $this->client->get('contact/' . $id);

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }

    public function create(Contact $contact): JsonResponseDataContact
    {
        $response = $this->client->post('contact', $this->client->serialize($contact));

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }

    public function update(Contact $contact): JsonResponseDataContact
    {
        $response = $this->client->put('contact/' . $contact->getId(), $this->client->serialize($contact));

        return $this->client->deserialize($response->body, JsonResponseDataContact::class);
    }

    public function delete(Contact $contact): JsonResponseDataJsonNoData
    {
        $response = $this->client->delete('contact/' . $contact->getId());

        return $this->client->deserialize($response->body, JsonResponseDataJsonNoData::class);
    }
}
