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

use NNTmux\Trakt\Request\Shows\Aliases as AliasesRequest;
use NNTmux\Trakt\Request\Shows\Collected as CollectedRequest;
use NNTmux\Trakt\Request\Shows\Comments as CommentsRequest;
use NNTmux\Trakt\Request\Shows\People as PeopleRequest;
use NNTmux\Trakt\Request\Shows\Played as PlayedRequest;
use NNTmux\Trakt\Request\Shows\Popular as PopularRequest;
use NNTmux\Trakt\Request\Shows\Ratings as RatingsRequest;
use NNTmux\Trakt\Request\Shows\Related as RelatedRequest;
use NNTmux\Trakt\Request\Shows\Stats as StatsRequest;
use NNTmux\Trakt\Request\Shows\Summary as SummaryRequest;
use NNTmux\Trakt\Request\Shows\Translations as TranslationsRequest;
use NNTmux\Trakt\Request\Shows\Trending as TrendingRequest;
use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\Shows\Updates as UpdatesRequest;
use NNTmux\Trakt\Request\Shows\Watched as WatchedRequest;
use NNTmux\Trakt\Request\Shows\Watching as WatchingRequest;

class Shows extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Shows\Progress
    */
    public $progress;

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
     * @param $mediaId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function summary($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
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
    public function get($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
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
     * @param \Illuminate\Support\Carbon|null $date
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function updates(Carbon $date = null)
    {
        return $this->request(new UpdatesRequest($date));
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
    public function watched($period = null)
    {
        return $this->request(new WatchedRequest($period));
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
    public function watching($mediaId)
    {
        return $this->request(new WatchingRequest($mediaId));
    }

}

