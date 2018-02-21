<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 14:30
 */

namespace NNTmux\Trakt\Request\Movies;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Movies\PopularHandler;

class Popular extends AbstractRequest
{

    public function __construct()
    {
        parent::__construct();
//        $this->setResponseHandler(new PopularHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/popular";
    }
}