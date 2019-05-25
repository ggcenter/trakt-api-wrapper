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
use NNTmux\Trakt\Request\Sync\Collection\Add as AddRequest;
use NNTmux\Trakt\Request\Sync\Collection\Get as GetRequest;
use NNTmux\Trakt\Request\Sync\Collection\Remove as RemoveRequest;
use NNTmux\Trakt\Api\Endpoint;

class Collection extends Endpoint {
    


    public function add(AccessToken $token, $items)
    {
        return $this->request(new AddRequest($token, $items));
    }

	public function get(AccessToken $token, $type)
    {
        return $this->request(new GetRequest($token, $type));
    }

	public function remove(AccessToken $token, $items)
    {
        return $this->request(new RemoveRequest($token, $items));
    }

}

