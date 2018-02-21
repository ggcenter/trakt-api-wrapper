<?php


namespace NNTmux\Trakt\Request\Movies;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;

class Watched extends AbstractRequest
{
    /**
     * @var
     */
    private $period;

    /**
     * @param null $period The period. Weekly, monthly or all. Defaults to weekly
     */
    public function __construct($period)
    {
        parent::__construct();
        $this->period = $period;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/watched/:period";
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }
}