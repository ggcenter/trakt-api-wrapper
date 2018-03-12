<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Calendars;

use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\Calendars\Shows\NewShows as NewShowsRequest;
use NNTmux\Trakt\Request\Calendars\Shows\Premieres as PremieresRequest;
use NNTmux\Trakt\Api\Endpoint;

class Shows extends Endpoint {

    /**
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function newShows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new NewShowsRequest($startDate, $days));
    }

    /**
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function premieres(Carbon $startDate = null, $days = null)
    {
        return $this->request(new PremieresRequest($startDate, $days));
    }

}

