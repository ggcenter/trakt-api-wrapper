<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:31
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Media\Movie;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;

class PopularHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return \TraktPHPApi\Trakt\Media\Movie[]
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return $this->makeMovies($json);
    }

    /**
     * @param $json
     * @return array
     */
    private function makeMovies($json)
    {
        $movies = [];

        foreach ($json as $item) {
            $movies[] = new Movie($item, $this->getClientId(), $this->getToken());
        }

        return $movies;
    }
}