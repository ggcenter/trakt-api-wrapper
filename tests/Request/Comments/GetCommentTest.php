<?php
use NNTmux\Trakt\Request\Comments\Get;
use NNTmux\Trakt\Request\Parameters\CommentId;
use NNTmux\Trakt\Request\RequestType;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 12:54
 */
class GetCommentTest extends PHPUnit\Framework\TestCase
{
    public function testStaticCall()
    {

        $request = new Get(41);

        $url = $request->getUrl();

        $this->assertEquals("comments/41", $url);

        $this->assertEquals(RequestType::GET, $request->getRequestType());
    }
}
