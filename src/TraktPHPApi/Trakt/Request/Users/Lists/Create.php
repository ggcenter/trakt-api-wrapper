<?php


namespace TraktPHPApi\Trakt\Request\Users\Lists;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Create extends AbstractRequest
{
    /**
     * @var
     */
    private $list;
    /**
     * @var
     */
    private $username;

    /**
     * @param AccessToken $token
     * @param $username
     * @param array $list
     */
    public function __construct(AccessToken $token, $username, $list)
    {
        parent::__construct();
        $this->setToken($token);

        $this->list = $list;
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
        return 'users/:username/lists';
    }

    protected function getPostBody()
    {
        return $this->list;
    }


}