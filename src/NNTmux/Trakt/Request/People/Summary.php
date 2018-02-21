<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:49
 */

namespace NNTmux\Trakt\Request\People;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

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