<?php

namespace Phpackage\Autodns\Xml;

use Phpackage\Autodns\Xml\Model\Auth;
use Phpackage\Autodns\Xml\Model\Request;
use Phpackage\Autodns\Xml\Task\Task;
use Requests_Session;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
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
     * @var string
     */
    private $language;

    /**
     * @param string $user
     * @param string $password
     * @param int $context
     * @param string $language
     */
    public function __construct(string $user, string $password, int $context = 100, string $language = 'en')
    {
        $this->auth = new Auth($user, $password, $context);
        $this->language = $language;

        $this->session = new Requests_Session(self::GATEWAY_URL, [
            'Content-Type' => 'text/xml',
        ]);

        $this->serializer = new Serializer([
            new ObjectNormalizer(
                null,
                new CamelCaseToSnakeCaseNameConverter(),
                null,
                new ReflectionExtractor()
            ),
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),
        ], [
            new XmlEncoder(),
        ]);
    }

    public function request(Task $task, string $responseType)
    {
        $request = new Request();
        $request->setAuth($this->auth);
        $request->setLanguage($this->language);
        $request->addTask($task);

        $response = $this->session->post('/', null, $this->serialize($request));

        return $this->deserialize($response->body, $responseType);
    }

    public function serialize(Request $data)
    {
        return $this->serializer->serialize($data, XmlEncoder::FORMAT, [
            XmlEncoder::REMOVE_EMPTY_TAGS => true,
            XmlEncoder::ROOT_NODE_NAME => 'request',
        ]);
    }

    public function deserialize(string $data, string $type)
    {
        return $this->serializer->deserialize($data, $type, XmlEncoder::FORMAT);
    }
}
