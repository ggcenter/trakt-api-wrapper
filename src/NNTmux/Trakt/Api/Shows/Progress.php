<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Shows;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Shows\Progress\Collection as CollectionRequest;
use NNTmux\Trakt\Request\Shows\Progress\Watched as WatchedRequest;
use NNTmux\Trakt\Api\Endpoint;

class Progress extends Endpoint {
    


    public function collection(AccessToken $token, $mediaId)
    {
        return $this->request(new CollectionRequest($token, $mediaId));
    }

	public function watched(AccessToken $token, $mediaId)
    {
        return $this->request(new WatchedRequest($token, $mediaId));
    }

}

