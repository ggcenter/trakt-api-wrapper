<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:28
 */

namespace TraktPHPApi\Trakt\Request\Comments;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\DefaultDeleteHandler;

class Like extends AbstractRequest
{
    /**
     * @var
     */
    private $id;

    /**
     * @param int $commentId
     */
    public function __construct($commentId)
    {
        parent::__construct();
        $this->id = $commentId;
        $this->setResponseHandler(new DefaultDeleteHandler());
    }

    public function getRequestType()
    {
        return RequestType::POST;
    }

    /**
     * @return CommentId
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUri()
    {
        return "comments/:id/like";
    }
}