<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api;

use NNTmux\Trakt\Media\Media;
use NNTmux\Trakt\Request\Comments\Create as CreateRequest;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Comments\Delete as DeleteRequest;
use NNTmux\Trakt\Request\Comments\Get as GetRequest;
use NNTmux\Trakt\Request\Comments\Like as LikeRequest;
use NNTmux\Trakt\Request\Comments\Replies as RepliesRequest;
use NNTmux\Trakt\Request\Comments\Update as UpdateRequest;

class Comments extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Comments\Like
    */
    public $like;

    /**
     * @param \NNTmux\Trakt\Media\Media $media
     * @param $comment
     * @param bool $spoiler
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\CommentTooShortException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function create(Media $media, $comment, $spoiler = false)
    {
        return $this->request(new CreateRequest($media, $comment, $spoiler));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $commentId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function delete(AccessToken $token, $commentId)
    {
        return $this->request(new DeleteRequest($token, $commentId));
    }

    /**
     * @param $commentId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get($commentId)
    {
        return $this->request(new GetRequest($commentId));
    }

    /**
     * @param $commentId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function like($commentId)
    {
        return $this->request(new LikeRequest($commentId));
    }

    /**
     * @param $commentId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function replies($commentId)
    {
        return $this->request(new RepliesRequest($commentId));
    }

    /**
     * @param $commentId
     * @param $comment
     * @param $spoiler
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\CommentTooShortException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function update($commentId, $comment, $spoiler)
    {
        return $this->request(new UpdateRequest($commentId, $comment, $spoiler));
    }

}

