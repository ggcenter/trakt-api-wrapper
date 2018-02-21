<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 10:01
 */

namespace NNTmux\Trakt\Request\Recommendations\Dismiss;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaId;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

class Show extends AbstractRequest
{

    use MediaIdTrait;

    /**
     * @param int $mediaId
     */
    public function __construct($mediaId)
    {
        parent::__construct();
        $this->id = $mediaId;
    }

    public function getRequestType()
    {
        return RequestType::DELETE;
    }

    public function getUri()
    {
        return "recommendations/shows/:id";
    }
}