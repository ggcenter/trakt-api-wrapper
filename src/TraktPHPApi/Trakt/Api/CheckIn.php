<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Media\Media;
use TraktPHPApi\Trakt\Request\CheckIn\Create as CreateRequest;
use TraktPHPApi\Trakt\Request\CheckIn\Delete as DeleteRequest;

class CheckIn extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param \TraktPHPApi\Trakt\Media\Media $media
     * @param null $message
     * @param array $sharing
     * @param null $venueId
     * @param null $venueName
     * @param null $appVersion
     * @param null $appDate
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function create(AccessToken $token, Media $media, $message = null, array $sharing = [], $venueId = null, $venueName = null, $appVersion = null, $appDate = null)
    {
        return $this->request(new CreateRequest($token, $media, $message, $sharing, $venueId, $venueName, $appVersion, $appDate));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function delete(AccessToken $token)
    {
        return $this->request(new DeleteRequest($token));
    }

}

