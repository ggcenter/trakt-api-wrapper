<?php


namespace TraktPHPApi\Trakt\Request\Sync\Watchlist;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Get extends AbstractRequest
{
    /**
     * @var
     */
    private $type;

    public function __construct(AccessToken $token, $type = null)
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
        return (!is_null($this->type))
            ? 'sync/watchlist/:type'
            : "sync/watchlist";
    }
}