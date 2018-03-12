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

    /**
     * @param $mediaId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function movie($mediaId)
    {
        return $this->request(new MovieRequest($mediaId));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function show($mediaId)
    {
        return $this->request(new ShowRequest($mediaId));
    }

}

