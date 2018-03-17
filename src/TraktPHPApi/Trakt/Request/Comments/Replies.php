<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 13:00
 */

namespace TraktPHPApi\Trakt\Request\Comments;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\Comments\CommentHandler;

class Replies extends AbstractRequest
{
    /**
     * @var
     */
    private $id;

    /**
     * @param $commentId
     */
    public function __construct($commentId)
    {
        parent::__construct();
        $this->id = $commentId;
        $this->setResponseHandler(new CommentHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUri()
    {
        return "comments/:id/replies";
    }
}