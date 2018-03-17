<?php


namespace TraktPHPApi\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Likes extends AbstractRequest
{
    /**
     * @var
     */
    private $type;

    /**
     * @param AccessToken $token
     * @param $type
     */
    public function __construct(AccessToken $token, $type)
    {
        parent::__construct();
        $this->setToken($token);
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return 'users/likes/:type';
    }
}