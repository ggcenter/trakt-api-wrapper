<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Sync\LastActivities as LastActivitiesRequest;
use TraktPHPApi\Trakt\Request\Sync\Playback as PlaybackRequest;
use TraktPHPApi\Trakt\Request\Sync\Watched as WatchedRequest;

class Sync extends Endpoint {
    
    /**
     * @var \TraktPHPApi\Trakt\Api\Sync\Collection
    */
    public $collection;

    /**
     * @var \TraktPHPApi\Trakt\Api\Sync\History
    */
    public $history;

    /**
     * @var \TraktPHPApi\Trakt\Api\Sync\Ratings
    */
    public $ratings;

    /**
     * @var \TraktPHPApi\Trakt\Api\Sync\Watchlist
    */
    public $watchlist;

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function lastActivities(AccessToken $token)
    {
        return $this->request(new LastActivitiesRequest($token));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function playback(AccessToken $token, $type)
    {
        return $this->request(new PlaybackRequest($token, $type));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watched(AccessToken $token, $type)
    {
        return $this->request(new WatchedRequest($token, $type));
    }

}

