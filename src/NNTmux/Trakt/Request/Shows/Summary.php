<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:56
 */

namespace NNTmux\Trakt\Request\Shows;

use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaId;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Movies\SummaryHandler;

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
//        $this->setResponseHandler(new SummaryHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/:id";
    }
}