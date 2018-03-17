<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Users;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Users\Lists\Create as CreateRequest;
use TraktPHPApi\Trakt\Request\Users\Lists\Delete as DeleteRequest;
use TraktPHPApi\Trakt\Request\Users\Lists\Get as GetRequest;
use TraktPHPApi\Trakt\Request\Users\Lists\Remove as RemoveRequest;
use TraktPHPApi\Trakt\Request\Users\Lists\Update as UpdateRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Lists extends Endpoint {

    /**
     * @var \TraktPHPApi\Trakt\Api\Users\Lists\Like
    */
    public $like;

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $username
     * @param $list
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
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
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function update(AccessToken $token, $username, $id, $updates)
    {
        return $this->request(new UpdateRequest($token, $username, $id, $updates));
    }

}

