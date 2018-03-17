<?php
use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\My\NewShows;
use TraktPHPApi\Trakt\Request\Calendars\ShowsPremieres;
use TraktPHPApi\Trakt\Request\Parameters\Days;
use TraktPHPApi\Trakt\Request\Parameters\StartDate;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:35
 */
class PremieresTest extends PHPUnit\Framework\TestCase
{
    public function testUriContainsParameters()
    {
        $date = Carbon::now()->subYears(3);
        $request = new NewShows(get_token(), $date, 500);

        $uri = $request->getUrl();

        $this->assertContains($date->format("Y-m-d"), $uri);
        $this->assertContains("500", $uri);
    }
}
