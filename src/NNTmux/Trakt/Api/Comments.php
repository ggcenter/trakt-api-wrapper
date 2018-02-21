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

    public function create(Media $media, $comment, $spoiler = false)
    {
        return $this->request(new CreateRequest($media, $comment, $spoiler));
    }

	public function delete(AccessToken $token, $commentId)
    {
        return $this->request(new DeleteRequest($token, $commentId));
    }

	public function get($commentId)
    {
        return $this->request(new GetRequest($commentId));
    }

	public function like($commentId)
    {
        return $this->request(new LikeRequest($commentId));
    }

	public function replies($commentId)
    {
        return $this->request(new RepliesRequest($commentId));
    }

	public function update($commentId, $comment, $spoiler)
    {
        return $this->request(new UpdateRequest($commentId, $comment, $spoiler));
    }

}

