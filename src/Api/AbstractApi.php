<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;

abstract class AbstractApi
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    protected function getModelName(): string
    {
        $className = explode('\\', static::class);

        return $className[count($className) - 1];
    }
}
