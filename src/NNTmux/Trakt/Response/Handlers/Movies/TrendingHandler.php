<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:43
 */

namespace NNTmux\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;
use NNTmux\Trakt\Response\Trending;

class TrendingHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return array
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return $this->makeTrendingObjects($json);
    }

    /**
     * @param $json
     * @return array
     */
    private function makeTrendingObjects($json)
    {
        $trending = [];
        foreach ($json as $trendingItem) {
            $trending[] = new Trending($trendingItem, $this->getClientId(), $this->getToken());
        }
        return $trending;
    }
}