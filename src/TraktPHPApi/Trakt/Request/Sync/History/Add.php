<?php


namespace TraktPHPApi\Trakt\Request\Sync\History;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Add extends AbstractRequest
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
        return "sync/history";
    }

    protected function getPostBody()
    {
        return $this->items;
    }


}