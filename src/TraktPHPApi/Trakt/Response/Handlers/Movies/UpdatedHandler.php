<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:48
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;
use TraktPHPApi\Trakt\Response\Updated;

class UpdatedHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        return $this->transformToObjects($response, Updated::class, $client);
    }
}