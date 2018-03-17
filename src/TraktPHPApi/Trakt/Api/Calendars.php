<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api;

use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\Movies as MoviesRequest;
use TraktPHPApi\Trakt\Request\Calendars\Shows as ShowsRequest;

class Calendars extends Endpoint {
    
    /**
     * @var \TraktPHPApi\Trakt\Api\Calendars\My
    */
    public $my;

    /**
     * @var \TraktPHPApi\Trakt\Api\Calendars\Shows
    */
    public $shows;
	
	/**
	 * @param \Illuminate\Support\Carbon|null $startDate
	 * @param null                            $days
	 *
	 * @return mixed
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
    public function movies(Carbon $startDate = null, $days = null)
    {
        return $this->request(new MoviesRequest($startDate, $days));
    }
	
	/**
	 * @param \Illuminate\Support\Carbon|null $startDate
	 * @param null                            $days
	 *
	 * @return mixed
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
    public function shows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new ShowsRequest($startDate, $days));
    }

}

