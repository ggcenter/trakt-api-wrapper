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

use NNTmux\Trakt\Request\People\Movies as MoviesRequest;
use NNTmux\Trakt\Request\People\Shows as ShowsRequest;
use NNTmux\Trakt\Request\People\Summary as SummaryRequest;

class People extends Endpoint {
    


    public function movies($mediaId)
    {
        return $this->request(new MoviesRequest($mediaId));
    }

	public function shows($mediaId)
    {
        return $this->request(new ShowsRequest($mediaId));
    }

	public function summary($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
    }

	public function get($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
    }

}

