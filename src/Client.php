<?php

namespace Phpackage\Autodns;

use Phpackage\Autodns\Api\ContactApi;
use Phpackage\Autodns\Api\DomainApi;
use Phpackage\Autodns\Api\DomainStudioApi;
use Phpackage\Autodns\Api\TestApi;
use Phpackage\Autodns\Api\UserApi;
use Requests_Session;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Client
{
    const API_BASE_URL_LIVE = 'https://api.autodns.com/v1/';
    const API_BASE_URL_DEMO = 'https://api.demo.autodns.com/v1/';

    /**
     * @var Requests_Session
     */
    private $session;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @param string $user
     * @param string $password
     * @param int $context
     * @param bool $demo
     */
    public function __construct(string $user, string $password, int $context = 100, bool $demo = false)
    {
        $this->session = new Requests_Session($demo ? self::API_BASE_URL_DEMO : self::API_BASE_URL_LIVE, [
            'Content-Type' => 'application/json',
            'X-Domainrobot-Context' => $context,
        ], [], [
            'auth' => [
                $user,
                $password,
            ],
        ]);

        $this->serializer = new Serializer([
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),
        ], [
            new JsonEncoder(),
        ]);
    }

    public function get(string $url)
    {
        return $this->session->get($url);
    }

    public function post(string $url, $data)
    {
        return $this->session->post($url, null, $data);
    }

    public function put(string $url, $data)
    {
        return $this->session->put($url, null, $data);
    }

    public function delete(string $url)
    {
        return $this->session->delete($url);
    }

    public function serialize($data)
    {
        return $this->serializer->serialize($data, JsonEncoder::FORMAT);
    }

    public function deserialize($data, $type)
    {
        return $this->serializer->deserialize($data, $type, JsonEncoder::FORMAT);
    }

    public function testApi()
    {
        return new TestApi($this);
    }

    public function userApi()
    {
        return new UserApi($this);
    }

    public function contactApi()
    {
        return new ContactApi($this);
    }

    public function domainApi()
    {
        return new DomainApi($this);
    }

    public function domainStudioApi()
    {
        return new DomainStudioApi($this);
    }
}
