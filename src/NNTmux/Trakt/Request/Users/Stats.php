<?php


namespace NNTmux\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Stats extends AbstractRequest
{
    /**
     * @var
     */
    private $username;

    /**
     * @param $username
     * @param AccessToken $token
     */
    public function __construct($username, AccessToken $token = null)
    {
        parent::__construct();
        $this->setToken($token);
        $this->username = $username;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getUri()
    {
        return 'users/:username/stats';
    }
}