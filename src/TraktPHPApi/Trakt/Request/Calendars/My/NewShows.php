<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:14
 */

namespace TraktPHPApi\Trakt\Request\Calendars\My;


use Illuminate\Support\Carbon;
use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\TimePeriod;
use TraktPHPApi\Trakt\Request\RequestType;

class NewShows extends AbstractRequest
{

    use TimePeriod;

    public function __construct(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        parent::__construct();
        $this->setStartDate($startDate);
        $this->setDays($days);
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
        return 'calendars/my/shows/new/:start_date/:days';
    }
}