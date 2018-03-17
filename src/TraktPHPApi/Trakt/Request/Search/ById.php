<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 10:12
 */

namespace TraktPHPApi\Trakt\Request\Search;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Response\Handlers\Search\SearchHandler;

class ById extends AbstractRequest
{
	
	/**
	 * ById constructor.
	 *
	 * @param                                              $idType
	 * @param                                              $mediaId
	 * @param \League\OAuth2\Client\Token\AccessToken|null $token
	 *
	 * @throws \InvalidArgumentException
	 */
    public function __construct($idType, $mediaId, AccessToken $token = null)
    {
        parent::__construct();
        $this->setQueryParams(
            [
	            'id_type' => $idType,
	            'id'      => $mediaId
            ]
        );
        if ($token !== null) {
            $this->setToken($token);
        }
        $this->setResponseHandler(new SearchHandler());
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return 'search';
    }
}