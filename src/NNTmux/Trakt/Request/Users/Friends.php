<?php


namespace NNTmux\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Friends extends AbstractRequest
{
    /**
     * @var
     */
    private $username;

    /**
     * @param $username
     * @param AccessToken $token
     */
    public function __construct($username, AccessToken $token)
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
        return RequestType::GET;
    }

    public function getUri()
    {
        return 'users/:username/friends';
    }
}