<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 27/03/15
 * Time: 12:00
 */

namespace TraktPHPApi\Trakt\Request\Episodes;


use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\RequestType;

class Watching extends AbstractRequest
{
    use MediaIdTrait;
    use EpisodeTrait;

    /**
     * @param int $mediaId
     * @param int $season
     * @param int $episode
     */
    public function __construct($mediaId, $season, $episode)
    {
        parent::__construct();
        $this->id = $mediaId;
        $this->season = $season;
        $this->episode = $episode;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/:id/seasons/:season/episode/:episode/watching";
    }
}