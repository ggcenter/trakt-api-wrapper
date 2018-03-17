<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:09
 */

namespace TraktPHPApi\Trakt\Request\Comments;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Exception\CommentTooShortException;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\Comments\CommentHandler;

class Update extends AbstractRequest
{
    use CommentSize;
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $comment;
    /**
     * @var bool
     */
    private $spoiler;

    /**
     * @param int $commentId
     * @param string $comment
     * @param bool $spoiler
     * @throws CommentTooShortException
     */
    public function __construct($commentId, $comment, $spoiler)
    {
        parent::__construct();
        $this->id = $commentId;
        $this->comment = $comment;
        $this->spoiler = $spoiler;
        $this->setResponseHandler(new CommentHandler());

        if ($this->commentIsNotAllowedSize()) {
            throw new CommentTooShortException;
        }
    }

    public function getRequestType()
    {
        return RequestType::PUT;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUri()
    {
        return "comments/:id";
    }

    protected function getPostBody()
    {
        return [
            "comment" => $this->comment,
            "spoiler" => $this->spoiler
        ];
    }


}