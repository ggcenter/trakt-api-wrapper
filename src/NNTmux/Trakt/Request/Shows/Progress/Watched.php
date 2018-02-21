<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 27/03/15
 * Time: 11:57
 */

namespace NNTmux\Trakt\Request\Shows\Progress;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\Parameters\MediaIdTrait;
use NNTmux\Trakt\Request\RequestType;

class Watched extends AbstractRequest
{

    use MediaIdTrait;

    /**
     * @param $mediaId
     */
    public function __construct(AccessToken $token, $mediaId)
    {
        parent::__construct();
        $this->setToken($token);
        $this->id = $mediaId;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/:id/progress/watched";
    }
}