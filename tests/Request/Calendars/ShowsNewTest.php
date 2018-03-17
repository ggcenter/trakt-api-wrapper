<?php
use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\My\NewShows;
use TraktPHPApi\Trakt\Request\Parameters\Days;
use TraktPHPApi\Trakt\Request\Parameters\StartDate;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:17
 */
class ShowsNewTest extends PHPUnit\Framework\TestCase
{

    public function testStaticCall()
    {
        $startDate = Carbon::now()->subYears(3);
        $request = new NewShows(get_token(), $startDate, 500);

        $url = $request->getUrl();

        $this->assertEquals("calendars/my/shows/new/" . $startDate->format("Y-m-d") . "/500", $url);

    }
}
