<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 10:07
 */

namespace TraktPHPApi\Trakt\Request\Scrobble;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Media\Media;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;

class Pause extends AbstractRequest
{
    use ScrobblerTrait;
    /**
     * @var
     */
    private $progress;

    /**
     * @param AccessToken $token
     * @param Media $media
     * @param $progress
     */
    public function __construct(AccessToken $token, Media $media, $progress)
    {
        parent::__construct();
        $this->setToken($token);
        $this->media = $media;
        $this->progress = $progress;
    }

    public function getUri()
    {
        return "scrobble/pause";
    }
}
