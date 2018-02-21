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
use NNTmux\Trakt\Request\Search\ById as ByIdRequest;
use NNTmux\Trakt\Request\Search\ByText as ByTextRequest;

class Search extends Endpoint {
    


    public function byId($idType, $mediaId, AccessToken $token = null)
    {
        return $this->request(new ByIdRequest($idType, $mediaId, $token));
    }

	public function byText($query, $type = null, $year = null, AccessToken $token = null)
    {
        return $this->request(new ByTextRequest($query, $type, $year, $token));
    }

}

