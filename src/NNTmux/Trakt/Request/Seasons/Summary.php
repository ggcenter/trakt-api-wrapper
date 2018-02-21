<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 27/03/15
 * Time: 12:00
 */

namespace NNTmux\Trakt\Request\Seasons;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

class Summary extends AbstractRequest
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
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/:id/seasons";
    }
}