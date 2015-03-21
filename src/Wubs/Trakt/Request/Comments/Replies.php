<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 13:00
 */

namespace Wubs\Trakt\Request\Comments;


use Wubs\Trakt\Request\AbstractRequest;
use Wubs\Trakt\Request\Parameters\CommentId;
use Wubs\Trakt\Request\RequestType;
use Wubs\Trakt\Response\Handlers\Comments\CommentHandler;

class Replies extends AbstractRequest
{
    /**
     * @var CommentId
     */
    private $id;

    /**
     * @param CommentId $id
     */
    public function __construct(CommentId $id)
    {
        parent::__construct();
        $this->id = $id;
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

    protected function getResponseHandler()
    {
        return CommentHandler::class;
    }


}