<?php

use Carbon\Carbon;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;
use Mockery\Mock;
use NNTmux\Trakt\Api;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Response\CheckIn;
use NNTmux\Trakt\Trakt;

class ApiTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Trakt
     */
    protected $trakt;

    /**
     * @var Carbon
     */
    protected $today;

    protected function tearDown()
    {
        Mockery::close();
    }

    protected function setUp()
    {
        $client = Mockery::mock(ClientInterface::class);

        $auth = mock_auth();

        $this->trakt = new Trakt($auth, $client);

        $this->today = Carbon::today(new DateTimeZone("Europe/Amsterdam"));
    }

    public function testCalendars()
    {
        $client = Mockery::mock(ClientInterface::class);
        $request = Mockery::mock(RequestInterface::class);
        $response = Mockery::mock(ResponseInterface::class);

        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $response->shouldReceive("json")->once()->andReturn([]);
        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $client->shouldReceive("send")->once()->andReturn($response);

        $auth = mock_auth();

        $trakt = new Trakt($auth, $client);

        $calendars = $trakt->calendars;

        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Calendars", $calendars);

        $movies = $calendars->movies($this->today, 7);
        $this->assertInternalType('object', $movies);
    }

    public function testCheckIn()
    {
        $json = '{
  "watched_at": "2014-08-06T01:11:37.953Z",
  "sharing": {
    "facebook": true,
    "twitter": true,
    "tumblr": false
  },
  "movie": {
    "title": "Guardians of the Galaxy",
    "year": 2014,
    "ids": {
      "trakt": 28,
      "slug": "guardians-of-the-galaxy-2014",
      "imdb": "tt2015381",
      "tmdb": 118340
    }
  }
}';
        $client = Mockery::mock(ClientInterface::class);
        $request = Mockery::mock(RequestInterface::class);
        $response = Mockery::mock(ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("getStatusCode")->once()->andReturn(200);
        $response->shouldReceive("json")->once()->andReturn(json_decode($json));

        $client->shouldReceive("send")->once()->andReturn($response);

        $auth = mock_auth();

        $trakt = new Trakt($auth, $client);

        $checkIn = $trakt->checkIn;
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\CheckIn", $checkIn);
        $response = $checkIn->create(
            get_token(),
            movie($client),
            "nooo way!",
            [
                'facebook' => false,
                'twitter' => false,
                'tumblr' => false
            ],
            "1200",
            "blablabla",
            "1.1",
            $this->today->format("Y-m-d")
        );
        $this->assertInstanceOf("NNTmux\\Trakt\\Response\\CheckIn", $response);
    }

    public function testComments()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Comments", $this->trakt->comments);
    }

    public function testEpisodes()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Episodes", $this->trakt->episodes);
    }

    public function testGenres()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Genres", $this->trakt->genres);
    }

    public function testMovies()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Movies", $this->trakt->movies);
    }

    public function testPeople()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\People", $this->trakt->people);
    }

    public function testRecommendations()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Recommendations", $this->trakt->recommendations);
    }

    public function testScrobble()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Scrobble", $this->trakt->scrobble);
    }

    public function testSearch()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Search", $this->trakt->search);
    }

    public function testSeasons()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Seasons", $this->trakt->seasons);
    }

    public function testShows()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Shows", $this->trakt->shows);
    }

    public function testUsers()
    {
        $this->assertInstanceOf("NNTmux\\Trakt\\Api\\Users", $this->trakt->users);
    }
}
