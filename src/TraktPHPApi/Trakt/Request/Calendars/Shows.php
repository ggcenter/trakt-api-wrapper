<?php


namespace TraktPHPApi\Trakt\Request\Calendars;


use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\TimePeriod;
use TraktPHPApi\Trakt\Request\RequestType;

class Shows extends AbstractRequest
{
    use TimePeriod;

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
        return 'calendars/all/shows/:start_date/:days';
    }
}