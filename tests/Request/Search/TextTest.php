<?php
use NNTmux\Trakt\Request\Parameters\Query;
use NNTmux\Trakt\Request\Parameters\Type;
use NNTmux\Trakt\Request\Parameters\Year;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Request\Search\ByText;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 12:11
 */
class TextTest extends PHPUnit_Framework_TestCase
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
