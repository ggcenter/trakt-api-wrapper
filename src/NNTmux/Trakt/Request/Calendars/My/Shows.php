<?php namespace NNTmux\Trakt\Request\Calendars\My;

use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\TimePeriod;
use NNTmux\Trakt\Request\RequestType;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 15:10
 */
class Shows extends AbstractRequest
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

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "calendars/my/shows/:start_date/:days";
    }


}