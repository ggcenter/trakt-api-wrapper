<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Users;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Users\Followers\Approve as ApproveRequest;
use NNTmux\Trakt\Request\Users\Followers\Deny as DenyRequest;
use NNTmux\Trakt\Request\Users\Followers\Get as GetRequest;
use NNTmux\Trakt\Api\Endpoint;

class Followers extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $followerRequestId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function approve(AccessToken $token, $followerRequestId)
    {
        return $this->request(new ApproveRequest($token, $followerRequestId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $followerRequestId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function deny(AccessToken $token, $followerRequestId)
    {
        return $this->request(new DenyRequest($token, $followerRequestId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get(AccessToken $token)
    {
        return $this->request(new GetRequest($token));
    }

}

