<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 16:08
 */

namespace TraktPHPApi\Trakt\Request\Comments;


use TraktPHPApi\Trakt\Media\Media;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Exception\CommentTooShortException;
use TraktPHPApi\Trakt\Request\RequestType;

class Create extends AbstractRequest
{

    use CommentSize;
    /**
     * @var
     */
    private $comment;
    /**
     * @var Media
     */
    private $media;
    /**
     * @var
     */
    private $spoiler;

    /**
     * @param Media $media
     * @param $comment
     * @param $spoiler
     * @throws CommentTooShortException
     */
    public function __construct(Media $media, $comment, $spoiler = false)
    {
        parent::__construct();

        $this->comment = $comment;
        $this->media = $media;
        $this->spoiler = $spoiler;

        if ($this->commentIsNotAllowedSize()) {
            throw new CommentTooShortException;
        }

    }

    public function getRequestType()
    {
        return RequestType::POST;
    }

    public function getUri()
    {
        return "comments";
    }

    protected function getPostBody()
    {
        $postBody = [
            'movie' => $this->media->getStandardFields(),
            'comment' => (string)$this->comment,
            'spoiler' => false,
            'review' => $this->isReview()
        ];

        return $postBody;
    }

    /**
     * @return int
     */
    protected function isReview()
    {
        return (strlen($this->comment) > 200);
    }
}