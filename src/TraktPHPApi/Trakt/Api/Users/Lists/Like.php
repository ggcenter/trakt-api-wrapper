<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Users\Lists;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Users\Lists\Like\Create as CreateRequest;
use TraktPHPApi\Trakt\Request\Users\Lists\Like\Delete as DeleteRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Like extends Endpoint {

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $listId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function create(AccessToken $token, $username, $listId)
    {
        return $this->request(new CreateRequest($token, $username, $listId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $listId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function delete(AccessToken $token, $username, $listId)
    {
        return $this->request(new DeleteRequest($token, $username, $listId));
    }

}

