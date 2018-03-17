<?php
use Illuminate\Support\Carbon;
use TraktPHPApi\Trakt\Request\Calendars\My\Shows;
use TraktPHPApi\Trakt\Request\Movies\Comments;
use TraktPHPApi\Trakt\Request\Parameters\Days;
use TraktPHPApi\Trakt\Request\Parameters\MediaId;
use TraktPHPApi\Trakt\Request\Parameters\StartDate;
use TraktPHPApi\Trakt\Request\UriBuilder;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 16/03/15
 * Time: 22:43
 */
class UriBuilderTest extends PHPUnit\Framework\TestCase
{
    public function testReturnsFormattedUriFromRequestObject()
    {
        $request = new Shows(get_token(), Carbon::now(), 7);

        $formattedUri = UriBuilder::format($request);

        $this->assertContains($formattedUri, $formattedUri);
        $this->assertContains(Carbon::now()->format("Y-m-d"), $formattedUri);

    }

    public function testReturnsFormattedUriFromRequestObjectWithParameterNotAsLastParameter()
    {
        $request = new Comments("guardians-of-the-galaxy-2014");

        $formattedUri = UriBuilder::format($request);

        $this->assertContains("guardians-of-the-galaxy-2014", $formattedUri);
        $this->assertContains("/comments", $formattedUri);
    }
}
