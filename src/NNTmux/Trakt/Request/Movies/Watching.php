<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:48
 */

namespace NNTmux\Trakt\Request\Movies;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

class Watching extends AbstractRequest
{

    use MediaIdTrait;

    /**
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }


    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/:id/watching";
    }
}