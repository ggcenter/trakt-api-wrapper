<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:40
 */

namespace TraktPHPApi\Trakt\Request\Episodes;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\RequestType;

class Stats extends AbstractRequest
{
    use MediaIdTrait, EpisodeTrait;

    /**
     * @param  int $mediaId
     * @param int $season
     * @param int $episode
     */
    public function __construct($mediaId, $season, $episode)
    {
        parent::__construct();
        $this->id = $mediaId;
        $this->episode = $episode;
        $this->season = $season;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/:id/seasons/:season/episode/:episode/stats";
    }
}