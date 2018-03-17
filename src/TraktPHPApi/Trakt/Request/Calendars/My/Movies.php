<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 26/02/15
 * Time: 00:48
 */

namespace TraktPHPApi\Trakt\Request\Calendars\My;


use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\TimePeriod;
use TraktPHPApi\Trakt\Request\RequestType;

class Movies extends AbstractRequest
{
    use TimePeriod;

    public function __construct(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setStartDate($startDate);
        $this->setDays($days);
        $this->setToken($accessToken);
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "calendars/my/movies/:start_date/:days";
    }
}