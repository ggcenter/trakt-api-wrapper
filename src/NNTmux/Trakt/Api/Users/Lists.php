<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Users;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Users\Lists\Create as CreateRequest;
use NNTmux\Trakt\Request\Users\Lists\Delete as DeleteRequest;
use NNTmux\Trakt\Request\Users\Lists\Get as GetRequest;
use NNTmux\Trakt\Request\Users\Lists\Remove as RemoveRequest;
use NNTmux\Trakt\Request\Users\Lists\Update as UpdateRequest;
use NNTmux\Trakt\Api\Endpoint;

class Lists extends Endpoint {

    /**
     * @var \NNTmux\Trakt\Api\Users\Lists\Like
    */
    public $like;

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $list
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function create(AccessToken $token, $username, $list)
    {
        return $this->request(new CreateRequest($token, $username, $list));
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

    /**
     * @param $username
     * @param null $listId
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get($username, $listId = null, AccessToken $token = null)
    {
        return $this->request(new GetRequest($username, $listId, $token));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $listId
     * @param $itemsToRemove
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function remove(AccessToken $token, $username, $listId, $itemsToRemove)
    {
        return $this->request(new RemoveRequest($token, $username, $listId, $itemsToRemove));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $id
     * @param $updates
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function update(AccessToken $token, $username, $id, $updates)
    {
        return $this->request(new UpdateRequest($token, $username, $id, $updates));
    }

}

