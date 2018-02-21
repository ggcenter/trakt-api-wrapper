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

    public function lastActivities(AccessToken $token)
    {
        return $this->request(new LastActivitiesRequest($token));
    }

	public function playback(AccessToken $token, $type)
    {
        return $this->request(new PlaybackRequest($token, $type));
    }

	public function watched(AccessToken $token, $type)
    {
        return $this->request(new WatchedRequest($token, $type));
    }

}

