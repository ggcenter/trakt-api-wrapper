<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 14/03/15
 * Time: 12:11
 */

namespace NNTmux\Trakt\Request\Search;


use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\AbstractRequest;
use NNTmux\Trakt\Request\RequestType;
use NNTmux\Trakt\Response\Handlers\Search\SearchHandler;

class ByText extends AbstractRequest
{
    /**
     * @var
     */
    private $query;
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $year;

    /**
     * @param string $query
     * @param string $type
     * @param int $year
     * @param AccessToken $token
     */
    public function __construct($query, $type = null, $year = null, AccessToken $token = null)
    {
        parent::__construct();

        $this->query = $query;
        $this->type = $type;
        $this->year = $year;

        if ($token !== null) {
            $this->setToken($token);
        }

        $queryParams = $this->makeQueryParams();
        $this->setQueryParams($queryParams);
        $this->setResponseHandler(new SearchHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "search";
    }

    private function makeQueryParams()
    {
        $params = [];

        $params['query'] = $this->query;

        if (!is_null($this->type)) {
            $params['type'] = $this->type;
        }

        if (!is_null($this->year)) {
            $params['year'] = $this->year;
        }

        return $params;
    }
}