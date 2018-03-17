<?php
use Illuminate\Support\Carbon;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Calendars\My;
use TraktPHPApi\Trakt\Request\Calendars\My\Movies;
use TraktPHPApi\Trakt\Request\Parameters\Days;
use TraktPHPApi\Trakt\Request\Parameters\StartDate;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;
use TraktPHPApi\Trakt\TraktHttpClient;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 23/03/15
 * Time: 18:11
 */
class AbstractRequestTest extends PHPUnit\Framework\TestCase
{


    protected function tearDown()
    {
        Mockery::close();
    }

    public function testCanRegisterResponseHandler()
    {
        $request = new Movies(get_token());
        $request->setResponseHandler(new MyResponseHandler());

        $handler = $request->getResponseHandler();

        $this->assertInstanceOf(MyResponseHandler::class, $handler);
    }

    public function testCanSetResponseHandlerOnStaticRequest()
    {
        $client = Mockery::mock(ClientInterface::class);
        $request = Mockery::mock(RequestInterface::class);
        $response = Mockery::mock(ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $client->shouldReceive("send")->andReturn($response);

        $response = (new Movies(get_token()))->make(get_client_id(), $client, new MyResponseHandler());

        $this->assertTrue($response);
    }

    public function testCanOmitRequestParametersAsParameter()
    {
        $client = Mockery::mock(ClientInterface::class);
        $request = Mockery::mock(RequestInterface::class);
        $response = Mockery::mock(ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $client->shouldReceive("send")->andReturn($response);

        $response = (new Movies(get_token()))->make(get_client_id(), $client, new MyResponseHandler());

        $this->assertTrue($response);
    }

    public function testOnlyPassRequestParameters()
    {
        $client = Mockery::mock(ClientInterface::class);
        $request = Mockery::mock(RequestInterface::class);
        $response = Mockery::mock(ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $response->shouldReceive("json")->once()->andReturn([]);
        $client->shouldReceive("send")->andReturn($response);

        $response = (new Movies(get_token(), Carbon::now(), 20))->make(get_client_id(), $client);

        $this->assertInternalType("object", $response);
    }

    public function testCanAddQueryParamsToRequestObject()
    {
        $request = new My\Shows(get_token(), Carbon::now());
        $request->addQueryParam("extended", "images")->addQueryParam("page", 2);

        $this->assertInstanceOf(AbstractRequest::class, $request);
    }

}


class MyResponseHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        return true;
    }
}