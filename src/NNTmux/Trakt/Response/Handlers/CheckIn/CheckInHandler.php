<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 14:17
 */

namespace NNTmux\Trakt\Response\Handlers\CheckIn;


use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Response\CheckIn;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;

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