<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:38
 */

namespace TraktPHPApi\Trakt\Request\Shows;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaId;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\RequestType;

class Related extends AbstractRequest
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
        return "shows/:id/related";
    }
}