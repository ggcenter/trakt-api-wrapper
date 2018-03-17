<?php


namespace TraktPHPApi\Trakt\Request\Calendars\Shows;


use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\TimePeriod;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler;

class NewShows extends AbstractRequest
{
    use TimePeriod;

    /**
     * NewShows constructor.
     *
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     */
    public function __construct(Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setStartDate($startDate);
        $this->setDays($days);
    }

    /**
     * @return mixed|string
     */
    public function getRequestType()
    {
        return RequestType::GET;
    }

    /**
     * @return mixed|string
     */
    public function getUri()
    {
        return 'calendars/all/shows/new/:start_date/:days';
    }
}