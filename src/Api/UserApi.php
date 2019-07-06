<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Model\Response\JsonResponseDataUser;
use Phpackage\Autodns\Model\Query;
use Phpackage\Autodns\Model\User;

class UserApi extends AbstractApi
{
    public function search(Query $query): JsonResponseDataUser
    {
        $response = $this->client->post('user/_search', $this->client->serialize($query));

        return $this->client->deserialize($response->body, JsonResponseDataUser::class);
    }

    public function create(User $user): JsonResponseDataUser
    {
        $response = $this->client->post('user', $this->client->serialize($user));

        return $this->client->deserialize($response->body, JsonResponseDataUser::class);
    }
}
