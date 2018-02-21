<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:38
 */

namespace NNTmux\Trakt\Request\Movies;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Movies\TrendingHandler;

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