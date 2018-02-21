<?php


namespace NNTmux\Trakt\Request\Comments\Like;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\DefaultDeleteHandler;

class Delete extends AbstractRequest
{
    /**
     * @var
     */
    private $commentId;

    /**
     * @param AccessToken $token
     * @param $commentId
     */
    public function __construct(AccessToken $token, $commentId)
    {
        parent::__construct();
        $this->setToken($token);

        $this->setResponseHandler(new DefaultDeleteHandler());
        $this->commentId = $commentId;
    }

    public function getRequestType()
    {
        return RequestType::DELETE;
    }

    public function getUri()
    {
        return 'comments/:id/like';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->commentId;
    }
}