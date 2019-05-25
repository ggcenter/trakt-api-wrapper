<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Comments;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Comments\Like\Delete as DeleteRequest;
use NNTmux\Trakt\Api\Endpoint;

class Like extends Endpoint {
    


    public function delete(AccessToken $token, $commentId)
    {
        return $this->request(new DeleteRequest($token, $commentId));
    }

}

