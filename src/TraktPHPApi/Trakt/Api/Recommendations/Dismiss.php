<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api\Recommendations;

use TraktPHPApi\Trakt\Request\Recommendations\Dismiss\Movie as MovieRequest;
use TraktPHPApi\Trakt\Request\Recommendations\Dismiss\Show as ShowRequest;
use TraktPHPApi\Trakt\Api\Endpoint;

class Dismiss extends Endpoint {

    /**
     * @param $mediaId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function movie($mediaId)
    {
        return $this->request(new MovieRequest($mediaId));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function show($mediaId)
    {
        return $this->request(new ShowRequest($mediaId));
    }

}

