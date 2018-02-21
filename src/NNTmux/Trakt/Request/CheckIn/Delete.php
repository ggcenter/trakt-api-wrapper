<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 15:49
 */

namespace NNTmux\Trakt\Request\CheckIn;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\CheckIn\CheckOutHandler;
use NNTmux\Trakt\Response\Handlers\DefaultDeleteHandler;

class Delete extends AbstractRequest
{
    public function __construct(AccessToken $token)
    {
        parent::__construct();
        $this->setResponseHandler(new DefaultDeleteHandler());
        $this->setToken($token);
    }

    public function getRequestType()
    {
        return RequestType::DELETE;
    }

    public function getUri()
    {
        return "checkin";
    }
}