<?php


namespace TraktPHPApi\Trakt\Request\Movies;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Collected extends AbstractRequest
{
    /**
     * @var null
     */
    private $period;

    /**
     * @param null $period The period. Weekly, monthly or all. Defaults to weekly
     */
    public function __construct($period = null)
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
        return "movies/collected/:period";
    }

    /**
     * @return null
     */
    public function getPeriod()
    {
        return $this->period;
    }
}