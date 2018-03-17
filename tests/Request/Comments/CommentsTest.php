<?php
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use TraktPHPApi\Trakt\Request\Comments\Delete;
use TraktPHPApi\Trakt\Request\Comments\Get;
use TraktPHPApi\Trakt\Request\Comments\Create;
use TraktPHPApi\Trakt\Request\Parameters\Comment;
use TraktPHPApi\Trakt\Request\Parameters\CommentId;
use TraktPHPApi\Trakt\Request\Parameters\Spoiler;
use TraktPHPApi\Trakt\Request\RequestType;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 18:50
 */
class CommentsTest extends PHPUnit\Framework\TestCase
{

    protected function tearDown()
    {
        Mockery::close();
    }

    public function testCanPostCommentFromMovieObject()
    {
        $client = Mockery::mock(ClientInterface::class);

        $request = new Create(
            movie($client),
            "This was an awesome movie! I really liked it",
            false
        );

        $type = $request->getRequestType();

        $url = $request->getUrl();

        $this->assertEquals(RequestType::POST, $type);
        $this->assertEquals("comments", $url);

    }

    public function testCanDeleteCommentById()
    {
        $request = new Delete(get_token(), 1223);

        $type = $request->getRequestType();

        $url = $request->getUrl();

        $this->assertEquals(RequestType::DELETE, $type);
        $this->assertEquals("comments/1223", $url);

    }

    /**
     * @@expectedException TraktPHPApi\Trakt\Request\Exception\CommentTooShortException
     */
    public function testThrowsExceptionWithShoutLessThan5Words()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);

        $movie = movie($client);

        new Create($movie, "too short", false);
    }
}
