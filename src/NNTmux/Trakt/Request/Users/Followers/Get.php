<?php


namespace NNTmux\Trakt\Request\Users\Followers;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Get extends AbstractRequest
{
    public function __construct(AccessToken $token)
    {
        parent::__construct();
        $this->setToken($token);
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "users/requests";
    }
}