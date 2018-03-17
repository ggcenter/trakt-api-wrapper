<?php


namespace TraktPHPApi\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Watching extends AbstractRequest
{
    /**
     * @var
     */
    private $username;

    /**
     * @param $username
     * @param AccessToken|null $token
     */
    public function __construct($username, AccessToken $token = null)
    {
        parent::__construct();

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
        return 'users/:username/watching';
    }
}