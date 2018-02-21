<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 27/03/15
 * Time: 12:00
 */

namespace NNTmux\Trakt\Request\Seasons;


use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

class Season extends AbstractRequest
{
    use MediaIdTrait;
    /**
     * @var Season
     */
    private $season;

    /**
     * @param int $mediaId
     * @param int $season
     */
    public function __construct($mediaId, $season)
    {
        parent::__construct();
        $this->id = $mediaId;
        $this->season = $season;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    public function getUri()
    {
        return "shows/:id/seasons/:season";
    }
}