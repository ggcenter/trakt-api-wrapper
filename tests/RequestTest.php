<?php
use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\My\Movies;
use TraktPHPApi\Trakt\Request\Parameters\Type;
use TraktPHPApi\Trakt\Request\Users\History;
use TraktPHPApi\Trakt\TraktHttpClient;

/**
 * Class RequestTest
 */
class RequestTest extends PHPUnit\Framework\TestCase
{
	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 * @throws \PHPUnit\Framework\ExpectationFailedException
	 * @throws \PHPUnit\Framework\SkippedTestError
	 * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
	 */
	public function testCanMakeRequest()
    {
        try {
            $result = (new Movies(get_token(), Carbon::today(), 7))->make(
                get_client_id(),
                TraktHttpClient::make()
            );

            $this->assertInternalType('object', $result);
        } catch (\GuzzleHttp\Exception\ClientException $exception) {
	        if ($exception->getCode() === 401) {
		        $this->markTestSkipped('Test skipped because your token is outdated');
	        }
        }
    }
	
	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 * @throws \PHPUnit\Framework\ExpectationFailedException
	 * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
	 */
    public function testRequestWithoutToken()
    {
        $response = (new History('megawubs', Type::movies()))->make(get_client_id(), TraktHttpClient::make());

        $this->assertInternalType('object', $response);
    }

}
