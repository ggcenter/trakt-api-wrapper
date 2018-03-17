<?php


namespace TraktPHPApi\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Profile extends AbstractRequest
{

    private $username;

    /**
     * @param  string $username
     * @param AccessToken|null $token
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

    public function getUri()
    {
        return "users/:username";
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}