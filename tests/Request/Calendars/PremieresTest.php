<?php
use Illuminate\Support\Carbon;
use NNTmux\Trakt\Request\Calendars\My\NewShows;
use NNTmux\Trakt\Request\Calendars\ShowsPremieres;
use NNTmux\Trakt\Request\Parameters\Days;
use NNTmux\Trakt\Request\Parameters\StartDate;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:35
 */
class PremieresTest extends PHPUnit_Framework_TestCase
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
