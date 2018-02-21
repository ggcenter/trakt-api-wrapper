<?php
use Carbon\Carbon;
use NNTmux\Trakt\Request\Calendars\My\Shows;
use NNTmux\Trakt\Request\Movies\Comments;
use NNTmux\Trakt\Request\Parameters\Days;
use NNTmux\Trakt\Request\Parameters\MediaId;
use NNTmux\Trakt\Request\Parameters\StartDate;
use NNTmux\Trakt\Request\UriBuilder;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 16/03/15
 * Time: 22:43
 */
class UriBuilderTest extends PHPUnit_Framework_TestCase
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
