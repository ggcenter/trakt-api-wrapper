<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:31
 */

namespace NNTmux\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Media\Movie;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;

class PopularHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return \NNTmux\Trakt\Media\Movie[]
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