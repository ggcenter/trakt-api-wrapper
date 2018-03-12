<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Sync\LastActivities as LastActivitiesRequest;
use NNTmux\Trakt\Request\Sync\Playback as PlaybackRequest;
use NNTmux\Trakt\Request\Sync\Watched as WatchedRequest;

class Sync extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Sync\Collection
    */
    public $collection;

    /**
     * @var \NNTmux\Trakt\Api\Sync\History
    */
    public $history;

    /**
     * @var \NNTmux\Trakt\Api\Sync\Ratings
    */
    public $ratings;

    /**
     * @var \NNTmux\Trakt\Api\Sync\Watchlist
    */
    public $watchlist;

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watched(AccessToken $token, $type)
    {
        return $this->request(new WatchedRequest($token, $type));
    }

}

