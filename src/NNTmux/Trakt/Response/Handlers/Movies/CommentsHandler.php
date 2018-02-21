<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 11:54
 */

namespace NNTmux\Trakt\Response\Handlers\Movies;


use Psr\Http\Message\ResponseInterface;
use Illuminate\Support\Collection;
use NNTmux\Trakt\Contracts\ResponseHandler;
use NNTmux\Trakt\Response\Comment;
use NNTmux\Trakt\Response\Handlers\AbstractResponseHandler;

class CommentsHandler extends AbstractResponseHandler implements ResponseHandler
{

    /**
     * @param ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface|GuzzleHttp\ClientInterface $client
     * @return \NNTmux\Trakt\Response\Comment[]|Collection
     */
    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $json = $this->getJson($response);

        return $this->makeComments($json);

    }

    /**
     * @param $json
     * @return array
     */
    private function makeComments($json)
    {
        $comments = [];

        foreach ($json as $item) {
            $comments[] = new Comment($item, $this->getClientId(), $this->getToken());
        }
        return collect($comments);
    }
}