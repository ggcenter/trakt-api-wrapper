<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 11:31
 */

namespace NNTmux\Trakt\Request\Movies;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Movies\CommentsHandler;

class Comments extends AbstractRequest
{
    use MediaIdTrait;

    /**
     * @param $mediaId
     */
    public function __construct($mediaId)
    {
        parent::__construct();
        $this->id = $mediaId;
//        $this->setResponseHandler(new CommentsHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/:id/comments";
    }
}