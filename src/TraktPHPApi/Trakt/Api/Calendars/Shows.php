<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Calendars;

use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\Shows\NewShows as NewShowsRequest;
use TraktPHPApi\Trakt\Request\Calendars\Shows\Premieres as PremieresRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Shows extends Endpoint {

    /**
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function newShows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new NewShowsRequest($startDate, $days));
    }

    /**
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function premieres(Carbon $startDate = null, $days = null)
    {
        return $this->request(new PremieresRequest($startDate, $days));
    }

}

