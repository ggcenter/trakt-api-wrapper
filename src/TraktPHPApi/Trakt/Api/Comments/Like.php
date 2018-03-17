<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Comments;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Comments\Like\Delete as DeleteRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Like extends Endpoint {

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $commentId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function delete(AccessToken $token, $commentId)
    {
        return $this->request(new DeleteRequest($token, $commentId));
    }

}

