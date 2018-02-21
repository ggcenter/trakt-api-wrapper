<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 13:09
 */

namespace NNTmux\Trakt\Request\Genres;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Request\RequestType;

class Get extends AbstractRequest
{
    /**
     * @var string
     */
    private $type;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        parent::__construct();
        $this->type = $type;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getUri()
    {
        return "genres/list/:type";
    }
}