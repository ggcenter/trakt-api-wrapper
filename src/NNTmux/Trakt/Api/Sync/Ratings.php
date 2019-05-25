<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Sync;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Sync\Ratings\Add as AddRequest;
use NNTmux\Trakt\Request\Sync\Ratings\Get as GetRequest;
use NNTmux\Trakt\Request\Sync\Ratings\Remove as RemoveRequest;
use NNTmux\Trakt\Api\Endpoint;

class Ratings extends Endpoint {
    


    public function add(AccessToken $token, $items)
    {
        return $this->request(new AddRequest($token, $items));
    }

	public function get(AccessToken $token, $type, $rating = null)
    {
        return $this->request(new GetRequest($token, $type, $rating));
    }

	public function remove(AccessToken $token, $items)
    {
        return $this->request(new RemoveRequest($token, $items));
    }

}

