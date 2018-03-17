<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 17:08
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Comments;


use Psr\Http\Message\ResponseInterface;
use Illuminate\Support\Collection;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Response\Comment;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;

class CommentHandler extends AbstractResponseHandler implements ResponseHandler
{


    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return Comment|\TraktPHPApi\Trakt\Response\Comment[]|Collection
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $response = $this->getJson($response);

        // it are more comments
        if (is_array($response)) {
            return $this->createComments($response, $client);
        }
        // it's one comment
        return new Comment($response, $this->getClientId(), $client);

    }

    /**
     * @param array $response
     * @param \GuzzleHttp\ClientInterface $client
     * @return Comment[]\Collection
     */
    private function createComments($response, \GuzzleHttp\ClientInterface $client)
    {
        $map = [];
        foreach ($response as $comment) {
            $map[] = new Comment($comment, $this->getClientId(), $client);
        }
        return collect($map);
    }
}