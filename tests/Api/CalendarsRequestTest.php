<?php


use Illuminate\Support\Carbon;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use NNTmux\Trakt\Api;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Trakt;

class CalendarsRequestTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var Trakt
     */
    protected $trakt;

    private $today;

    protected function tearDown()
    {
        Mockery::close();
    }

    protected function setUp()
    {
        parent::setUp();
        $this->today = Carbon::today(new DateTimeZone("Europe/Amsterdam"));
    }

    public function testShows()
    {
        $trakt = new Trakt(mock_auth(), mock_client(200, "[]"));

        $res = $trakt->calendars->my->shows(get_token(), $this->today, 7);

        $this->assertInternalType("object", $res);
    }

    public function testNewShows()
    {
        $trakt = new Trakt(mock_auth(), mock_client(200, "[]"));

        $res = $trakt->calendars->my->newShows(get_token(), $this->today, 7);

        $this->assertInternalType("object", $res);
    }

    public function testPremieres()
    {
        $trakt = new Trakt(mock_auth(), mock_client(200, "[]"));

        $res = $trakt->calendars->my->premieres(get_token(), $this->today, 7);

        $this->assertInternalType("object", $res);
    }

    public function testMovies()
    {
        $trakt = new Trakt(mock_auth(), mock_client(200, "[]"));

        $res = $trakt->calendars->my->movies(get_token(), $this->today, 7);

        $this->assertInternalType("object", $res);
    }

    public function testAllShows()
    {
        $auth = mock_auth();

        $res = (new Trakt($auth, mock_client(200, "[]")))->calendars->shows($this->today, 7);

        $this->assertInternalType("object", $res);
    }
}
