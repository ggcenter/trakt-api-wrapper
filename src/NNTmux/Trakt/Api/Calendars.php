<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api;

use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\Calendars\Movies as MoviesRequest;
use NNTmux\Trakt\Request\Calendars\Shows as ShowsRequest;

class Calendars extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Calendars\My
    */
    public $my;

    /**
     * @var \NNTmux\Trakt\Api\Calendars\Shows
    */
    public $shows;
	
	/**
	 * @param \Illuminate\Support\Carbon|null $startDate
	 * @param null                            $days
	 *
	 * @return mixed
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
    public function shows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new ShowsRequest($startDate, $days));
    }

}

