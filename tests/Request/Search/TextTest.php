<?php
use TraktPHPApi\Trakt\Request\Parameters\Query;
use TraktPHPApi\Trakt\Request\Parameters\Type;
use TraktPHPApi\Trakt\Request\Parameters\Year;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Request\Search\ByText;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 12:11
 */
class TextTest extends PHPUnit\Framework\TestCase
{
    public function testSearchMovie()
    {
        $request = new ByText(
            "guardians of the galaxy",
            Type::movie(),
            "2014"
        );

        $this->assertEquals(RequestType::GET, $request->getRequestType());

        $this->assertEquals("search", $request->getUrl());
    }
}
