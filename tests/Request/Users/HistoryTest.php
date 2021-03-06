<?php

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Request\Users\History;

class HistoryTest extends PHPUnit\Framework\TestCase
{

    protected function tearDown()
    {
        Mockery::close();
    }

    public function testThatItWorks()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $response->shouldReceive("json")->once()->andReturn([]);
        $client->shouldReceive("send")->andReturn($response);

        $clientId = getenv("TRAKT_CLIENT_ID");

        $response = (new History('rolle', Type::movies(), get_token()))->make($clientId, $client);

        $this->assertInternalType("object", $response);
    }
}
