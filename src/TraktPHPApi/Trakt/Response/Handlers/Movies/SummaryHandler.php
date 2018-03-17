<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:59
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Media\Movie;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;

class SummaryHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return new Movie($json, $this->getClientId(), $this->getToken(), $client);
    }
}