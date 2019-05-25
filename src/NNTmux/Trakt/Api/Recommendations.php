<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Recommendations\Movies as MoviesRequest;
use NNTmux\Trakt\Request\Recommendations\Shows as ShowsRequest;

class Recommendations extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Recommendations\Dismiss
    */
    public $dismiss;

    public function movies(AccessToken $token)
    {
        return $this->request(new MoviesRequest($token));
    }

	public function shows(AccessToken $token)
    {
        return $this->request(new ShowsRequest($token));
    }

}

