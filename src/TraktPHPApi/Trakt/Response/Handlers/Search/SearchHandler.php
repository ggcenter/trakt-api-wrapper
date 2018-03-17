<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 14:28
 */

namespace TraktPHPApi\Trakt\Response\Handlers\Search;


use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Illuminate\Support\Collection;
use TraktPHPApi\Trakt\Exception\MediaTypeNotSupportedException;
use TraktPHPApi\Trakt\Media\Episode;
use TraktPHPApi\Trakt\Media\Movie;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Media\Show;
use TraktPHPApi\Trakt\Request\Parameters\Type;
use TraktPHPApi\Trakt\Response\Handlers\AbstractResponseHandler;

class SearchHandler extends AbstractResponseHandler implements ResponseHandler
{

    public function handle(ResponseInterface $response, \GuzzleHttp\ClientInterface $client)
    {
        $items = $this->getJson($response);


        if ($this->getToken() !== null) {
            $result = new Collection();
            foreach ($items as $item) {
                $result->push($this->toMedia($item, $client));
            }
            return $result;
        }

        return collect($items);
    }

    /**
     * @param $item
     * @return Movie|Show
     * @throws MediaTypeNotSupportedException
     */
    protected function toMedia($item, ClientInterface $client)
    {
        $id = $this->getClientId();
        $token = $this->getToken();

        if ($this->isMovie($item)) {
            return new Movie($item, $id, $token, $client);
        }

        if ($this->isShow($item)) {
            return new Show($item, $id, $token, $client);
        }

        if ($this->isEpisode($item)) {
            return new Episode($item, $id, $token, $client);
        }

        throw new MediaTypeNotSupportedException;
    }

    /**
     * @param $item
     * @return bool
     */
    protected function isMovie($item)
    {
        return $item->type == Type::movie();
    }

    /**
     * @param $item
     * @return bool
     */
    protected function isShow($item)
    {
        return $item->type == Type::show();
    }

    private function isEpisode($item)
    {
        return $item->type == Type::episode();
    }
}