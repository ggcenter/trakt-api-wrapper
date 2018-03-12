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

use NNTmux\Trakt\Request\Movies\Aliases as AliasesRequest;
use NNTmux\Trakt\Request\Movies\Collected as CollectedRequest;
use NNTmux\Trakt\Request\Movies\Comments as CommentsRequest;
use NNTmux\Trakt\Request\Movies\People as PeopleRequest;
use NNTmux\Trakt\Request\Movies\Played as PlayedRequest;
use NNTmux\Trakt\Request\Movies\Popular as PopularRequest;
use NNTmux\Trakt\Request\Movies\Ratings as RatingsRequest;
use NNTmux\Trakt\Request\Movies\Related as RelatedRequest;
use NNTmux\Trakt\Request\Movies\Releases as ReleasesRequest;
use NNTmux\Trakt\Request\Movies\Stats as StatsRequest;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Movies\Summary as SummaryRequest;
use NNTmux\Trakt\Request\Movies\Translations as TranslationsRequest;
use NNTmux\Trakt\Request\Movies\Trending as TrendingRequest;
use NNTmux\Trakt\Request\Movies\Watched as WatchedRequest;
use NNTmux\Trakt\Request\Movies\Watching as WatchingRequest;

class Movies extends Endpoint {

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function aliases($mediaId)
    {
        return $this->request(new AliasesRequest($mediaId));
    }

    /**
     * @param null $period
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function collected($period = null)
    {
        return $this->request(new CollectedRequest($period));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function comments($mediaId)
    {
        return $this->request(new CommentsRequest($mediaId));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function people($mediaId)
    {
        return $this->request(new PeopleRequest($mediaId));
    }

    /**
     * @param null $period
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function played($period = null)
    {
        return $this->request(new PlayedRequest($period));
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function popular()
    {
        return $this->request(new PopularRequest());
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function ratings($mediaId)
    {
        return $this->request(new RatingsRequest($mediaId));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function related($mediaId)
    {
        return $this->request(new RelatedRequest($mediaId));
    }

    /**
     * @param $mediaId
     * @param $country
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function releases($mediaId, $country)
    {
        return $this->request(new ReleasesRequest($mediaId, $country));
    }

    /**
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function stats($mediaId)
    {
        return $this->request(new StatsRequest($mediaId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function summary(AccessToken $token, $mediaId)
    {
        return $this->request(new SummaryRequest($token, $mediaId));
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function get(AccessToken $token, $mediaId)
    {
        return $this->request(new SummaryRequest($token, $mediaId));
    }

    /**
     * @param $mediaId
     * @param $language
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function translations($mediaId, $language)
    {
        return $this->request(new TranslationsRequest($mediaId, $language));
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function trending()
    {
        return $this->request(new TrendingRequest());
    }

    /**
     * @param $period
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watched($period)
    {
        return $this->request(new WatchedRequest($period));
    }

    /**
     * @param $id
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function watching($id)
    {
        return $this->request(new WatchingRequest($id));
    }

}

