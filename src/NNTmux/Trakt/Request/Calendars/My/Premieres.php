<?php namespace NNTmux\Trakt\Request\Calendars\My;

use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\Days;
use NNTmux\Trakt\Request\Parameters\StartDate;
use NNTmux\Trakt\Request\Parameters\TimePeriod;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Calendars\Shows as ShowsResponse;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 15:10
 */
class Premieres extends AbstractRequest
{
    use TimePeriod;

    /**
     * @param AccessToken $accessToken
     * @param Carbon $startDate
     * @param $days
     */
    public function __construct(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setDays($days);
        $this->setStartDate($startDate);
        $this->setToken($accessToken);
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
        return 'calendars/my/shows/premieres/:start_date/:days';
    }


}