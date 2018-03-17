<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api;

use TraktPHPApi\Trakt\Request\Episodes\Comments as CommentsRequest;
use TraktPHPApi\Trakt\Request\Episodes\Ratings as RatingsRequest;
use TraktPHPApi\Trakt\Request\Episodes\Stats as StatsRequest;
use TraktPHPApi\Trakt\Request\Episodes\Summary as SummaryRequest;
use TraktPHPApi\Trakt\Request\Episodes\Watching as WatchingRequest;

class Episodes extends Endpoint {

    /**
     * @param $showId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function comments($showId, $season, $episode)
    {
        return $this->request(new CommentsRequest($showId, $season, $episode));
    }

    /**
     * @param $mediaId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function ratings($mediaId, $season, $episode)
    {
        return $this->request(new RatingsRequest($mediaId, $season, $episode));
    }

    /**
     * @param $mediaId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function stats($mediaId, $season, $episode)
    {
        return $this->request(new StatsRequest($mediaId, $season, $episode));
    }

    /**
     * @param $mediaId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function summary($mediaId, $season, $episode)
    {
        return $this->request(new SummaryRequest($mediaId, $season, $episode));
    }

    /**
     * @param $mediaId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get($mediaId, $season, $episode)
    {
        return $this->request(new SummaryRequest($mediaId, $season, $episode));
    }

    /**
     * @param $mediaId
     * @param $season
     * @param $episode
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watching($mediaId, $season, $episode)
    {
        return $this->request(new WatchingRequest($mediaId, $season, $episode));
    }

}

