<?php


namespace NNTmux\Trakt\Request\Users\Followers;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Approve extends AbstractRequest
{
    /**
     * @var
     */
    private $id;

    /**
     * @param AccessToken $token
     * @param int $followerRequestId
     */
    public function __construct(AccessToken $token, $followerRequestId)
    {
        parent::__construct();
        $this->setToken($token);
        $this->id = $followerRequestId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getRequestType()
    {
        return RequestType::POST;
    }


    public function getUri()
    {
        return "users/requests/:id";
    }
}