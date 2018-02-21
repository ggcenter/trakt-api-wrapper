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

use Carbon\Carbon;
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

    public function movies(Carbon $startDate = null, $days = null)
    {
        return $this->request(new MoviesRequest($startDate, $days));
    }

	public function shows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new ShowsRequest($startDate, $days));
    }

}

