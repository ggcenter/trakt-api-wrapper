<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Users;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Users\Followers\Approve as ApproveRequest;
use TraktPHPApi\Trakt\Request\Users\Followers\Deny as DenyRequest;
use TraktPHPApi\Trakt\Request\Users\Followers\Get as GetRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Followers extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $followerRequestId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function approve(AccessToken $token, $followerRequestId)
    {
        return $this->request(new ApproveRequest($token, $followerRequestId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $followerRequestId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function deny(AccessToken $token, $followerRequestId)
    {
        return $this->request(new DenyRequest($token, $followerRequestId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get(AccessToken $token)
    {
        return $this->request(new GetRequest($token));
    }

}

