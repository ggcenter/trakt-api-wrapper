<?php


namespace TraktPHPApi\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Follow extends AbstractRequest
{
    /**
     * @var
     */
    private $username;

    /**
     * @param AccessToken $token
     * @param $username
     */
    public function __construct(AccessToken $token, $username)
    {
        parent::__construct();
        $this->setToken($token);
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getRequestType()
    {
        return RequestType::POST;
    }

    public function getUri()
    {
        return 'users/:username/follow';
    }
}