<?php

class ScrobbleTest extends PHPUnit_Framework_TestCase
{
    public function testCanStartScrobbling()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \NNTmux\Trakt\Request\Scrobble\Start(get_token(), movie($client), 0);
        $this->assertEquals(\NNTmux\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \NNTmux\Trakt\TraktHttpClient::make(), new \NNTmux\Trakt\Response\Handlers\DefaultResponseHandler());
    }

    public function testCanPauseScrobble()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \NNTmux\Trakt\Request\Scrobble\Pause(get_token(), movie($client), 5);
        $this->assertEquals(\NNTmux\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \NNTmux\Trakt\TraktHttpClient::make(), new \NNTmux\Trakt\Response\Handlers\DefaultResponseHandler());
    }

    public function testCanStopScrobble()
    {
        $client = Mockery::mock(\GuzzleHttp\ClientInterface::class);
        $request = new \NNTmux\Trakt\Request\Scrobble\Stop(get_token(), movie($client), 5);
        $this->assertEquals(\NNTmux\Trakt\Request\RequestType::POST, $request->getRequestType());
        $request->make(get_client_id(), \NNTmux\Trakt\TraktHttpClient::make(), new \NNTmux\Trakt\Response\Handlers\DefaultResponseHandler());
    }
}
