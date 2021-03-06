<?php
use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\Calendars\My\Movies;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Request\Users\History;
use NNTmux\Trakt\TraktHttpClient;

/**
 * Class RequestTest
 */
class RequestTest extends PHPUnit\Framework\TestCase
{
	/**
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 * @throws \PHPUnit\Framework\ExpectationFailedException
	 * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
	 */
    public function testRequestWithoutToken()
    {
        $response = (new History('megawubs', Type::movies()))->make(get_client_id(), TraktHttpClient::make());

        $this->assertInternalType('object', $response);
    }

}
