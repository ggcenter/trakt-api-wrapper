<?php
use NNTmux\Trakt\Request\Comments\Replies;
use NNTmux\Trakt\Request\Parameters\CommentId;
use NNTmux\Trakt\Request\RequestType;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 12/03/15
 * Time: 13:02
 */
class RepliesTest extends PHPUnit\Framework\TestCase
{

    public function testStaticCall()
    {

        $request = new Replies(41);

        $this->assertEquals("comments/41/replies", $request->getUrl());

        $this->assertEquals(RequestType::GET, $request->getRequestType());
    }
}
