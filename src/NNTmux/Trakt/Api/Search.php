<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace NNTmux\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Request\Search\ById as ByIdRequest;
use NNTmux\Trakt\Request\Search\ByText as ByTextRequest;

class Search extends Endpoint
{
	
	/**
	 * @param                                              $idType
	 * @param                                              $mediaId
	 * @param \League\OAuth2\Client\Token\AccessToken|null $token
	 *
	 * @return mixed
	 * @throws \InvalidArgumentException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
	public function byId($idType, $mediaId, AccessToken $token = null)
    {
        return $this->request(new ByIdRequest($idType, $mediaId, $token));
    }
	
	/**
	 * @param                                              $query
	 * @param null                                         $type
	 * @param null                                         $year
	 * @param \League\OAuth2\Client\Token\AccessToken|null $token
	 *
	 * @return mixed
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \NNTmux\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
    public function byText($query, $type = null, $year = null, AccessToken $token = null)
    {
        return $this->request(new ByTextRequest($query, $type, $year, $token));
    }

}

