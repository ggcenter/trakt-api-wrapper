<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Sync;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Sync\Collection\Add as AddRequest;
use TraktPHPApi\Trakt\Request\Sync\Collection\Get as GetRequest;
use TraktPHPApi\Trakt\Request\Sync\Collection\Remove as RemoveRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Collection extends Endpoint {

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $items
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function add(AccessToken $token, $items)
    {
        return $this->request(new AddRequest($token, $items));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $type
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get(AccessToken $token, $type)
    {
        return $this->request(new GetRequest($token, $type));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $items
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function remove(AccessToken $token, $items)
    {
        return $this->request(new RemoveRequest($token, $items));
    }

}

