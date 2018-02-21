<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:48
 */

namespace NNTmux\Trakt\Response\Handlers\Movies;


use GuzzleHttp\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;
use NNTmux\Trakt\Response\Updated;

class UpdatedHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        return $this->transformToObjects($response, Updated::class, $client);
    }
}