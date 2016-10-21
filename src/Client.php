<?php

namespace Kniebs\DockerHub;

use \GuzzleHttp\Client as Guzzle;

use Kniebs\DockerHun\Api\BaseApi;
use Kniebs\DockerHun\Api\User;

class Client extends BaseApi
{

    /** @var string */
    protected $password;

    /** @var string */
    protected $username;

    /**
     * Client constructor.
     * @param Guzzle|null $guzzle
     * @param array $auth
     */
    public function __construct(array $auth = [], Guzzle $guzzle = null)
    {
        parent::__construct($guzzle);

        $this->username = $auth['username'];

        $this->password = $auth['password'];
    }

    public function user()
    {
        return new User($this);
    }
}