<?php

namespace Kniebs\Tests;


use Kniebs\DockerHub\Client;

class UserApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_register_a_user_with_docker_hub()
    {
        $client = new Client();
        $response = $client->user()->register('foo.bar@tester.com');

        $response = \GuzzleHttp\json_decode($response);

        $this->assertEquals($response->email, 'foo.bar@tester.com');
    }
}