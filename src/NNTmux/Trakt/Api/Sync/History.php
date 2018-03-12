<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Sync;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Sync\History\Add as AddRequest;
use NNTmux\Trakt\Request\Sync\History\Get as GetRequest;
use NNTmux\Trakt\Request\Sync\History\Remove as RemoveRequest;
use NNTmux\Trakt\Api\Endpoint;

class History extends Endpoint {
    
    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $items
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function add(AccessToken $token, $items)
    {
        return $this->request(new AddRequest($token, $items));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $type
     * @param null $id
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get(AccessToken $token, $type, $id = null)
    {
        return $this->request(new GetRequest($token, $type, $id));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $items
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function remove(AccessToken $token, $items)
    {
        return $this->request(new RemoveRequest($token, $items));
    }

}

