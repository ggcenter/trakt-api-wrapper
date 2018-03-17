<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:39
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Calendars;


use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Request\Parameters\Days;
use TraktPHPApi\Trakt\Request\Parameters\Type;
use TraktPHPApi\Trakt\Response\Calendar\Calendar;
use TraktPHPApi\Trakt\Response\Calendar\Day;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;
use TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler;

class MoviesHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return Calendar
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return new Calendar($json, Type::movie(), $this->getClientId(), $this->getToken(), $client);
    }
}