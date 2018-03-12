<?php namespace NNTmux\Trakt;

use GuzzleHttp\ClientInterface;
use NNTmux\Trakt\Api\Calendars;
use NNTmux\Trakt\Api\CheckIn;
use NNTmux\Trakt\Api\Comments;
use NNTmux\Trakt\Api\Episodes;
use NNTmux\Trakt\Api\Genres;
use NNTmux\Trakt\Api\Movies;
use NNTmux\Trakt\Api\People;
use NNTmux\Trakt\Api\Recommendations;
use NNTmux\Trakt\Api\Scrobble;
use NNTmux\Trakt\Api\Search;
use NNTmux\Trakt\Api\Seasons;
use NNTmux\Trakt\Api\Shows;
use NNTmux\Trakt\Api\Sync;
use NNTmux\Trakt\Api\Users;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Auth\TraktProvider;

class Trakt
{
	/**
	 * @var Calendars
	 */
    public $calendars;

    /**
     * @var CheckIn
     */
    public $checkIn;

    /**
     * @var Comments
     */
    public $comments;

    /**
     * @var Episodes
     */
    public $episodes;

    /**
     * @var Genres
     */
    public $genres;
    /**
     * @var Movies
     */
    public $movies;

    /**
     * @var People
     */
    public $people;

    /**
     * @var Recommendations
     */
    public $recommendations;

    /**
     * @var Scrobble
     */
    public $scrobble;

    /**
     * @var Search
     */
    public $search;

    /**
     * @var Seasons
     */
    public $seasons;

    /**
     * @var Shows
     */
    public $shows;

    /**
     * @var Users
     */
    public $users;

    /**
     * @var Sync
     */
    public $sync;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var TraktProvider
     */
    public $auth;

    /**
     * @param Auth $auth
     * @param ClientInterface $client
     * @throws \InvalidArgumentException
     */
    public function __construct(Auth $auth, ClientInterface $client = null)
    {
        $this->client = $client;
        if ($client === null) {
            $this->client = TraktHttpClient::make();
        }
        $this->auth = $auth;
        $this->createWrappers();
    }

    /**
     * Creates the wrappers for all public properties and sets them.
     *
     *
     * @throws \ReflectionException
     */
    private function createWrappers(): void
    {
        $id = $this->auth->provider->getClientId();
        $this->calendars = new Calendars($id, $this->client);
        $this->checkIn = new CheckIn($id, $this->client);
        $this->comments = new Comments($id, $this->client);
        $this->episodes = new Episodes($id, $this->client);
        $this->genres = new Genres($id, $this->client);
        $this->movies = new Movies($id, $this->client);
        $this->people = new People($id, $this->client);
        $this->recommendations = new Recommendations($id, $this->client);
        $this->scrobble = new Scrobble($id, $this->client);
        $this->search = new Search($id, $this->client);
        $this->seasons = new Seasons($id, $this->client);
        $this->shows = new Shows($id, $this->client);
        $this->sync = new Sync($id, $this->client);
        $this->users = new Users($id, $this->client);
    }
}