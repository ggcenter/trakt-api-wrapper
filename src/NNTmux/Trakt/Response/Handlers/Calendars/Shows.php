<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 17:24
 */

namespace NNTmux\Trakt\Response\Handlers\Calendars;


use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Media\Episode;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Response\Calendar\Day;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;

class Shows extends AbstractResponseHandler implements ResponseHandler
{
    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return \NNTmux\Trakt\Response\Calendar\Day[]
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return $this->toDays($json);
    }

    /**
     * @param $json
     * @return Day[]
     */
    private function toDays($json)
    {
        $days = [];

        foreach ($json as $date => $movies) {
            $days[] = new Day($date, $movies, Type::show(), $this->getClientId(), $this->getToken());
        }

        return $days;
    }
}