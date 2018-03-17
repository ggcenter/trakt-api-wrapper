<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Shows;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Shows\Progress\Collection as CollectionRequest;
use TraktPHPApi\Trakt\Request\Shows\Progress\Watched as WatchedRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Progress extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $mediaId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function collection(AccessToken $token, $mediaId)
    {
        return $this->request(new CollectionRequest($token, $mediaId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $mediaId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watched(AccessToken $token, $mediaId)
    {
        return $this->request(new WatchedRequest($token, $mediaId));
    }

}

