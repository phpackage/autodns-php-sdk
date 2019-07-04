<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Request\DomainEnvelopeSearchRequest;
use Phpackage\Autodns\Model\Response\JsonResponseDataDomainEnvelope;

class DomainStudioApi extends AbstractApi
{
    public function search(DomainEnvelopeSearchRequest $request): JsonResponseDataDomainEnvelope
    {
        $response = $this->client->post('domainstudio', $this->client->serialize($request));

        return $this->client->deserialize($response->body, JsonResponseDataDomainEnvelope::class);
    }
}
