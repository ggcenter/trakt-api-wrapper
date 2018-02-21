<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 10:00
 */

namespace NNTmux\Trakt\Request\Recommendations;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Shows extends AbstractRequest
{
    public function __construct(AccessToken $token)
    {
        parent::__construct();
        $this->setToken($token);
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "recommendations/shows";
    }
}