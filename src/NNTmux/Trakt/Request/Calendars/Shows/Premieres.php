<?php


namespace NNTmux\Trakt\Request\Calendars\Shows;


use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\TimePeriod;
use NNTmux\Trakt\Request\RequestType;

class Premieres extends AbstractRequest
{
    use TimePeriod;

    public function __construct(Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setStartDate($startDate);
        $this->setDays($days);
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "calendars/all/shows/premieres/:start_date/:days";
    }
}