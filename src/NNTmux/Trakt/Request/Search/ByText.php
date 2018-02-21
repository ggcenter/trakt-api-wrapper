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
	 * ByText constructor.
	 *
	 * @param                                              $query
	 * @param null                                         $type
	 * @param null                                         $year
	 * @param \League\OAuth2\Client\Token\AccessToken|null $token
	 *
	 * @throws \InvalidArgumentException
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
	
	/**
	 * @return mixed|string
	 */
    public function getRequestType()
    {
        return RequestType::GET;
    }
	
	/**
	 * @return mixed|string
	 */
    public function getUri()
    {
        return 'search';
    }
	
	/**
	 * @return array
	 */
    private function makeQueryParams()
    {
        $params = [];

        $params['query'] = $this->query;

        if ($this->type !== null) {
            $params['type'] = $this->type;
        }

        if ($this->year !== null) {
            $params['year'] = $this->year;
        }

        return $params;
    }
}