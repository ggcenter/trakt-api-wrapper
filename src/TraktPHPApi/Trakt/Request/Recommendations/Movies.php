<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 10:00
 */

namespace TraktPHPApi\Trakt\Request\Recommendations;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Movies extends AbstractRequest
{
    /**
     * @param AccessToken $token
     */
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
        return "recommendations/movies";
    }
}