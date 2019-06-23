<?php

namespace Phpackage\Autodns\Xml;

use Phpackage\Autodns\Xml\Model\Auth;
use Phpackage\Autodns\Xml\Model\Request;
use Requests_Session;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Client
{
    const GATEWAY_URL = 'https://gateway.autodns.com/';

    /**
     * @var Auth
     */
    private $auth;

    /**
     * @var Requests_Session
     */
    private $session;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param string $user
     * @param string $password
     * @param int $context
     */
    public function __construct(string $user, string $password, int $context = 100)
    {
        $this->auth = new Auth($user, $password, $context);

        $this->session = new Requests_Session(self::GATEWAY_URL, [
            'Content-Type' => 'text/xml',
        ]);

        $this->serializer = new Serializer([
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),
        ], [
            new XmlEncoder(),
        ]);
    }

    public function execute(Request $request, string $responseType)
    {
        $request->setAuth($this->auth);

        $response = $this->session->post('/', null, $this->serialize($request));

        return $this->deserialize($response->body, $responseType);
    }

    public function serialize($data)
    {
        return $this->serializer->serialize($data, XmlEncoder::FORMAT);
    }

    public function deserialize($data, $type)
    {
        return $this->serializer->deserialize($data, $type, XmlEncoder::FORMAT);
    }
}
