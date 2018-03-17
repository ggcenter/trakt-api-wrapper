<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Calendars;

use League\OAuth2\Client\Token\AccessToken;
use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\My\Movies as MoviesRequest;
use TraktPHPApi\Trakt\Request\Calendars\My\NewShows as NewShowsRequest;
use TraktPHPApi\Trakt\Request\Calendars\My\Premieres as PremieresRequest;
use TraktPHPApi\Trakt\Request\Calendars\My\Shows as ShowsRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class My extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $accessToken
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function movies(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        return $this->request(new MoviesRequest($accessToken, $startDate, $days));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $accessToken
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function newShows(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        return $this->request(new NewShowsRequest($accessToken, $startDate, $days));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $accessToken
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function premieres(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        return $this->request(new PremieresRequest($accessToken, $startDate, $days));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $accessToken
     * @param \Illuminate\Support\Carbon|null $startDate
     * @param null $days
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function shows(AccessToken $accessToken, Carbon $startDate = null, $days = null)
    {
        return $this->request(new ShowsRequest($accessToken, $startDate, $days));
    }

}

