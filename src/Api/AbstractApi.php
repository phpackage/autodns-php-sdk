<?php

namespace Phpackage\Autodns\Api;

use Phpackage\Autodns\Client;

abstract class AbstractApi
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
