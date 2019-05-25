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
use NNTmux\Trakt\Request\Sync\History\Add as AddRequest;
use NNTmux\Trakt\Request\Sync\History\Get as GetRequest;
use NNTmux\Trakt\Request\Sync\History\Remove as RemoveRequest;
use NNTmux\Trakt\Api\Endpoint;

class History extends Endpoint {
    


    public function add(AccessToken $token, $items)
    {
        return $this->request(new AddRequest($token, $items));
    }

	public function get(AccessToken $token, $type, $id = null)
    {
        return $this->request(new GetRequest($token, $type, $id));
    }

	public function remove(AccessToken $token, $items)
    {
        return $this->request(new RemoveRequest($token, $items));
    }

}

