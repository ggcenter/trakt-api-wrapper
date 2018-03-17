<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 01/03/15
 * Time: 22:52
 */

namespace TraktPHPApi\Trakt\Media;


use GuzzleHttp\ClientInterface;
use League\OAuth2\Client\Token\AccessToken;

class Episode extends Media
{

    protected $standard = ['season', 'number', 'title', 'ids'];

    /**
     * @var Show
     */
    protected $show;

    /**
     * @var
     */
    protected $media;

    public function __construct($json, $clientId, AccessToken $token, ClientInterface $client)
    {
        parent::__construct($json, $clientId, $token, $client);
        $this->media = $this->json->episode;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->media->title;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->media->ids;
    }

    /**
     * @return \TraktPHPApi\Trakt\Media\Show
     */
    public function getShow()
    {
        return new Show($this->json->show, $this->id, $this->token, $this->client);
    }

    /**
     * @return mixed
     */
    public function getSeasonNumber()
    {
        return $this->media->season;
    }

    /**
     * @return mixed
     */
    public function getEpisodeNumber()
    {
        return $this->media->number;
    }
}