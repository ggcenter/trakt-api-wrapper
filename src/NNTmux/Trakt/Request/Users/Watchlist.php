<?php


namespace NNTmux\Trakt\Request\Users;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Watchlist extends AbstractRequest
{
    /**
     * @var null
     */
    public $type;
    /**
     * @var
     */
    public $username;

    /**
     * @param $username
     * @param null $type
     * @param AccessToken|null $token
     */
    public function __construct($username, $type = null, AccessToken $token = null)
    {

        parent::__construct();
        $this->setToken($token);
        $this->type = $type;
        $this->username = $username;
    }


    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {

        return (!is_null($this->type))
            ? "users/:username/watchlist/:type"
            : "users/:username/watchlist";
    }
}