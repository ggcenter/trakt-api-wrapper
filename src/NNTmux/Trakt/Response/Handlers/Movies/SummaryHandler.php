<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:59
 */

namespace NNTmux\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Media\Movie;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;

class SummaryHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return new Movie($json, $this->getClientId(), $this->getToken(), $client);
    }
}