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

use NNTmux\Trakt\Request\Episodes\Comments as CommentsRequest;
use NNTmux\Trakt\Request\Episodes\Ratings as RatingsRequest;
use NNTmux\Trakt\Request\Episodes\Stats as StatsRequest;
use NNTmux\Trakt\Request\Episodes\Summary as SummaryRequest;
use NNTmux\Trakt\Request\Episodes\Watching as WatchingRequest;

class Episodes extends Endpoint {
    


    public function comments($showId, $season, $episode)
    {
        return $this->request(new CommentsRequest($showId, $season, $episode));
    }

	public function ratings($mediaId, $season, $episode)
    {
        return $this->request(new RatingsRequest($mediaId, $season, $episode));
    }

	public function stats($mediaId, $season, $episode)
    {
        return $this->request(new StatsRequest($mediaId, $season, $episode));
    }

	public function summary($mediaId, $season, $episode)
    {
        return $this->request(new SummaryRequest($mediaId, $season, $episode));
    }

	public function get($mediaId, $season, $episode)
    {
        return $this->request(new SummaryRequest($mediaId, $season, $episode));
    }

	public function watching($mediaId, $season, $episode)
    {
        return $this->request(new WatchingRequest($mediaId, $season, $episode));
    }

}

