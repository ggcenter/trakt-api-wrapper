<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 14:17
 */

namespace TraktPHPApi\Trakt\Response\Handlers\CheckIn;


use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Response\CheckIn;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;

class CheckInHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param $client
     * @return CheckIn
     */
    public function handle(ResponseInterface $response, ClientInterface $client)
    {
        $object = $this->getJson($response);

        return new CheckIn($object, $this->getClientId(), $this->getToken(), $client);
    }
}