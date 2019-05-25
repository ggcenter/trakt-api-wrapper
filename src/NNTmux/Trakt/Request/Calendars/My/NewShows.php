<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:14
 */

namespace NNTmux\Trakt\Request\Calendars\My;


use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\TimePeriod;
use NNTmux\Trakt\Request\RequestType;

class NewShows extends AbstractRequest
{

    use TimePeriod;

    public function __construct(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setStartDate($startDate);
        $this->setDays($days);
//        $this->setResponseHandler(new ShowsResponseHandler());
        $this->setToken($accessToken);
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "calendars/my/shows/new/:start_date/:days";
    }
}