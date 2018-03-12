<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Users\Lists;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Users\Lists\Like\Create as CreateRequest;
use NNTmux\Trakt\Request\Users\Lists\Like\Delete as DeleteRequest;
use NNTmux\Trakt\Api\Endpoint;

class Like extends Endpoint {

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $listId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function delete(AccessToken $token, $username, $listId)
    {
        return $this->request(new DeleteRequest($token, $username, $listId));
    }

}

