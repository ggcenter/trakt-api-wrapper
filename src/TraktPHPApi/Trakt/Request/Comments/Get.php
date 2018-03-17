<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:49
 */

namespace TraktPHPApi\Trakt\Request\Comments;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Get extends AbstractRequest
{

    private $id;

    public function __construct($commentId)
    {
        parent::__construct();
        $this->id = $commentId;
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
        return "comments/:id";
    }
}