<?php
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Media\Movie;
use TraktPHPApi\Trakt\Request\CheckIn\Create;
use TraktPHPApi\Trakt\Request\Parameters\Query;
use TraktPHPApi\Trakt\Request\RequestType;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 13/03/15
 * Time: 19:26
 */
class MovieCheckInTest extends PHPUnit\Framework\TestCase
{
    protected function tearDown()
    {
        Mockery::close();
    }

    public function testStaticCall()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);

        $request = new Create(get_token(), movie($client), "Awesome Movie!", [], null, null, null, null);

        $url = $request->getUrl();

        $type = $request->getRequestType();

        $this->assertEquals(RequestType::POST, $type);
        $this->assertEquals("checkin", $url);
    }
}
