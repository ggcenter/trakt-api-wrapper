<?php namespace TraktPHPApi\Trakt;

use GuzzleHttp\ClientInterface;
use TraktPHPApi\Trakt\Api\Calendars;
use TraktPHPApi\Trakt\Api\CheckIn;
use TraktPHPApi\Trakt\Api\Comments;
use TraktPHPApi\Trakt\Api\Episodes;
use TraktPHPApi\Trakt\Api\Genres;
use TraktPHPApi\Trakt\Api\Movies;
use TraktPHPApi\Trakt\Api\People;
use TraktPHPApi\Trakt\Api\Recommendations;
use TraktPHPApi\Trakt\Api\Scrobble;
use TraktPHPApi\Trakt\Api\Search;
use TraktPHPApi\Trakt\Api\Seasons;
use TraktPHPApi\Trakt\Api\Shows;
use TraktPHPApi\Trakt\Api\Sync;
use TraktPHPApi\Trakt\Api\Users;
use TraktPHPApi\Trakt\Auth\Auth;
use TraktPHPApi\Trakt\Auth\TraktProvider;

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