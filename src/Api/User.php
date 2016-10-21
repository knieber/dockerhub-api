<?php

namespace Kniebs\DockerHun\Api;


use Kniebs\DockerHub\Client;

class User
{
    /** @var Client */
    protected $client;

    /**
     * User constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function register()
    {

    }
}