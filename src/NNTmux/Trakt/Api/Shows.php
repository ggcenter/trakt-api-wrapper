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
use Carbon\Carbon;
use NNTmux\Trakt\Request\Shows\Updates as UpdatesRequest;
use NNTmux\Trakt\Request\Shows\Watched as WatchedRequest;
use NNTmux\Trakt\Request\Shows\Watching as WatchingRequest;

class Shows extends Endpoint {
    
    /**
     * @var \NNTmux\Trakt\Api\Shows\Progress
    */
    public $progress;

    public function aliases($mediaId)
    {
        return $this->request(new AliasesRequest($mediaId));
    }

	public function collected($period = null)
    {
        return $this->request(new CollectedRequest($period));
    }

	public function comments($mediaId)
    {
        return $this->request(new CommentsRequest($mediaId));
    }

	public function people($mediaId)
    {
        return $this->request(new PeopleRequest($mediaId));
    }

	public function played($period = null)
    {
        return $this->request(new PlayedRequest($period));
    }

	public function popular()
    {
        return $this->request(new PopularRequest());
    }

	public function ratings($mediaId)
    {
        return $this->request(new RatingsRequest($mediaId));
    }

	public function related($mediaId)
    {
        return $this->request(new RelatedRequest($mediaId));
    }

	public function stats($mediaId)
    {
        return $this->request(new StatsRequest($mediaId));
    }

	public function summary($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
    }

	public function get($mediaId)
    {
        return $this->request(new SummaryRequest($mediaId));
    }

	public function translations($mediaId, $language)
    {
        return $this->request(new TranslationsRequest($mediaId, $language));
    }

	public function trending()
    {
        return $this->request(new TrendingRequest());
    }

	public function updates(Carbon $date = null)
    {
        return $this->request(new UpdatesRequest($date));
    }

	public function watched($period = null)
    {
        return $this->request(new WatchedRequest($period));
    }

	public function watching($mediaId)
    {
        return $this->request(new WatchingRequest($mediaId));
    }

}

