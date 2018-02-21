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

use NNTmux\Trakt\Request\Genres\Get as GetRequest;

class Genres extends Endpoint {
    


    public function get($type)
    {
        return $this->request(new GetRequest($type));
    }

}

