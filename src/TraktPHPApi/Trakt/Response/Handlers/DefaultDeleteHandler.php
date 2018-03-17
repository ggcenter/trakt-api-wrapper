<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 17:03
 */

namespace TraktPHPApi\Trakt\Response\Handlers;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Request\Parameters\AbstractParameter;

class DefaultDeleteHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param ClientInterface|GuzzleHttp\ClientInterface $client
     * @return bool
     * @internal param ClientInterface $client
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        return ($response->getStatusCode() === 204);
    }
}