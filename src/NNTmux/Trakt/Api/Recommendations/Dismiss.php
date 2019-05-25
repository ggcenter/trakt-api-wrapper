<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api\Recommendations;

use NNTmux\Trakt\Request\Recommendations\Dismiss\Movie as MovieRequest;
use NNTmux\Trakt\Request\Recommendations\Dismiss\Show as ShowRequest;
use NNTmux\Trakt\Api\Endpoint;

class Dismiss extends Endpoint {
    


    public function movie($mediaId)
    {
        return $this->request(new MovieRequest($mediaId));
    }

	public function show($mediaId)
    {
        return $this->request(new ShowRequest($mediaId));
    }

}

