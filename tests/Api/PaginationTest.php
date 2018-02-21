<?php


use Psr\Http\Message\ResponseInterface;
use Illuminate\Support\Collection;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Api\Movies;
use NNTmux\Trakt\Api\Users;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Request\Movies\Collected;
use NNTmux\Trakt\Request\Users\History;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;
use NNTmux\Trakt\TraktHttpClient;

class PaginationTest extends PHPUnit\Framework\TestCase
{


    public function testCanPaginatePaginatableMethod()
    {
        $movies = new Collected();

        $movies->setPage(2);
        $movies->setLimit(15);

        $movies->setResponseHandler(new PaginationTestResponseHandler());

        /** @var ResponseInterface $response */
        $response = $movies->make(get_client_id(), TraktHttpClient::make());
        $url = $response->getEffectiveUrl();
        $movies = collect($response->json(['object' => true]));

        $this->assertEquals('2', $response->getHeader('X-Pagination-Page'));
        $this->assertEquals('15', $response->getHeader('X-Pagination-Limit'));
        $this->assertContains("limit=15", $url);
        $this->assertContains("page=2", $url);

        $this->assertCount(15, $movies);
    }
}

class PaginationTestResponseHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface $client
     * @return ResponseInterface
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        return $response;
    }
}
