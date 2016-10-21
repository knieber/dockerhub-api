<?php

namespace Kniebs\DockerHun\Api;


use GuzzleHttp\Client;

class BaseApi
{
    const BASE_URL = '';

    /** @var Client */
    private $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function get()
    {

    }

    public function post($url, $data)
    {
        $this->request($url, 'POST', $data);
    }

    public function put()
    {

    }

    public function delete()
    {

    }

    public function request($url, $method, array $data)
    {
        return $this->guzzle->request($method, $url , ['json' => $data])
            ->getBody()
            ->getContents();
    }
}