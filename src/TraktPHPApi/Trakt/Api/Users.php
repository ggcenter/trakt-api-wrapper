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
use TraktPHPApi\Trakt\Request\Users\Collection as CollectionRequest;
use TraktPHPApi\Trakt\Request\Users\Comments as CommentsRequest;
use TraktPHPApi\Trakt\Request\Users\Follow as FollowRequest;
use TraktPHPApi\Trakt\Request\Users\Following as FollowingRequest;
use TraktPHPApi\Trakt\Request\Users\Friends as FriendsRequest;
use TraktPHPApi\Trakt\Request\Users\Hidden as HiddenRequest;
use TraktPHPApi\Trakt\Request\Users\History as HistoryRequest;
use TraktPHPApi\Trakt\Request\Users\Likes as LikesRequest;
use TraktPHPApi\Trakt\Request\Users\Profile as ProfileRequest;
use TraktPHPApi\Trakt\Request\Users\Ratings as RatingsRequest;
use TraktPHPApi\Trakt\Request\Users\Settings as SettingsRequest;
use TraktPHPApi\Trakt\Request\Users\Stats as StatsRequest;
use TraktPHPApi\Trakt\Request\Users\Watching as WatchingRequest;
use TraktPHPApi\Trakt\Request\Users\Watchlist as WatchlistRequest;

class Users extends Endpoint {

    /**
     * @var \TraktPHPApi\Trakt\Api\Users\Followers
    */
    public $followers;

    /**
     * @var \TraktPHPApi\Trakt\Api\Users\Lists
    */
    public $lists;

    /**
     * @param $username
     * @param $type
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function collection($username, $type, AccessToken $token = null)
    {
        return $this->request(new CollectionRequest($username, $type, $token));
    }

    /**
     * @param $username
     * @param $commentType
     * @param $type
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function comments($username, $commentType, $type, AccessToken $token)
    {
        return $this->request(new CommentsRequest($username, $commentType, $type, $token));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function follow(AccessToken $token, $username)
    {
        return $this->request(new FollowRequest($token, $username));
    }

    /**
     * @param $username
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function following($username, AccessToken $token = null)
    {
        return $this->request(new FollowingRequest($username, $token));
    }

    /**
     * @param $username
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function friends($username, AccessToken $token)
    {
        return $this->request(new FriendsRequest($username, $token));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $section
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function hidden(AccessToken $token, $section, $type)
    {
        return $this->request(new HiddenRequest($token, $section, $type));
    }

    /**
     * @param $username
     * @param null $type
     * @param null $id
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function history($username, $type = null, $id = null, AccessToken $token = null)
    {
        return $this->request(new HistoryRequest($username, $type, $id, $token));
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
    public function likes(AccessToken $token, $type)
    {
        return $this->request(new LikesRequest($token, $type));
    }

    /**
     * @param $username
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function profile($username, AccessToken $token = null)
    {
        return $this->request(new ProfileRequest($username, $token));
    }

    /**
     * @param $username
     * @param $type
     * @param null $rating
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function ratings($username, $type, $rating = null, AccessToken $token = null)
    {
        return $this->request(new RatingsRequest($username, $type, $rating, $token));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function settings(AccessToken $token)
    {
        return $this->request(new SettingsRequest($token));
    }

    /**
     * @param $username
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function stats($username, AccessToken $token = null)
    {
        return $this->request(new StatsRequest($username, $token));
    }

    /**
     * @param $username
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watching($username, AccessToken $token = null)
    {
        return $this->request(new WatchingRequest($username, $token));
    }

    /**
     * @param $username
     * @param null $type
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watchlist($username, $type = null, AccessToken $token = null)
    {
        return $this->request(new WatchlistRequest($username, $type, $token));
    }

}

