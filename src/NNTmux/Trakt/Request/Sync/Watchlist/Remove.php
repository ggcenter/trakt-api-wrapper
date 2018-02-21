<?php


namespace NNTmux\Trakt\Request\Sync\Watchlist;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Remove extends AbstractRequest
{
    /**
     * @var
     */
    private $items;

    /**
     * @param AccessToken $token
     * @param $items
     */
    public function __construct(AccessToken $token, $items)
    {
        parent::__construct();
        $this->setToken($token);
        $this->items = $items;
    }

    public function getRequestType()
    {
        return RequestType::POST;
    }

    public function getUri()
    {
        return "sync/watchlist/remove";
    }

    protected function getPostBody()
    {
        return $this->items;
    }
}