<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:56
 */

namespace TraktPHPApi\Trakt\Request\Shows;

use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaId;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\Movies\SummaryHandler;

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