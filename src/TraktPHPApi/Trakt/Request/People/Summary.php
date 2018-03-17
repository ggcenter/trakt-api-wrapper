<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:49
 */

namespace TraktPHPApi\Trakt\Request\People;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\RequestType;

class Summary extends AbstractRequest
{
    use MediaIdTrait;

    /**
     * @param $mediaId
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
        return "people/:id";
    }
}