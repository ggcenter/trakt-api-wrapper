<?php

class ScrobbleTest extends PHPUnit\Framework\TestCase
{
    public function testCanStartScrobbling()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \TraktPHPApi\Trakt\Request\Scrobble\Start(get_token(), movie($client), 0);
        $this->assertEquals(\TraktPHPApi\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \TraktPHPApi\Trakt\TraktHttpClient::make(), new \TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler());
    }

    public function testCanPauseScrobble()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \TraktPHPApi\Trakt\Request\Scrobble\Pause(get_token(), movie($client), 5);
        $this->assertEquals(\TraktPHPApi\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \TraktPHPApi\Trakt\TraktHttpClient::make(), new \TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler());
    }

    public function testCanStopScrobble()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \TraktPHPApi\Trakt\Request\Scrobble\Stop(get_token(), movie($client), 5);
        $this->assertEquals(\TraktPHPApi\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \TraktPHPApi\Trakt\TraktHttpClient::make(), new \TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler());
    }
}
