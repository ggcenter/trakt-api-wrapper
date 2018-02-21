<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:39
 */

namespace NNTmux\Trakt\Response\Handlers\Calendars;


use GuzzleHttp\Message\ResponseInterface;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Request\Parameters\Days;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Response\Calendar\Calendar;
use NNTmux\Trakt\Response\Calendar\Day;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;
use NNTmux\Trakt\Response\Handlers\DefaultResponseHandler;

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