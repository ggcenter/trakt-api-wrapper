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

use Carbon\Carbon;
use NNTmux\Trakt\Request\Calendars\Shows\NewShows as NewShowsRequest;
use NNTmux\Trakt\Request\Calendars\Shows\Premieres as PremieresRequest;
use NNTmux\Trakt\Api\Endpoint;

class Shows extends Endpoint {
    


    public function newShows(Carbon $startDate = null, $days = null)
    {
        return $this->request(new NewShowsRequest($startDate, $days));
    }

	public function premieres(Carbon $startDate = null, $days = null)
    {
        return $this->request(new PremieresRequest($startDate, $days));
    }

}

