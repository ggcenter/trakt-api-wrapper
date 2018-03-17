<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:38
 */

namespace TraktPHPApi\Trakt\Request\Movies;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\Movies\TrendingHandler;

class Trending extends AbstractRequest
{

    public function __construct()
    {
        parent::__construct();

//        $this->setResponseHandler(new TrendingHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/trending";
    }
}