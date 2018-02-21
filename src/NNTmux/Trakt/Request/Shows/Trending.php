<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 27/03/15
 * Time: 11:44
 */

namespace NNTmux\Trakt\Request\Shows;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Trending extends AbstractRequest
{

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/trending";
    }
}