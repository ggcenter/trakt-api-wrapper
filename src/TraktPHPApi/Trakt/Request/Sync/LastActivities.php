<?php


namespace TraktPHPApi\Trakt\Request\Sync;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class LastActivities extends AbstractRequest
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
        return "sync/last_activities";
    }
}