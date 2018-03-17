<?php
/*
|--------------------------------------------------------------------------
| Generated code
|--------------------------------------------------------------------------
| This class is auto generated. Please do not edit
|
|
*/
namespace TraktPHPApi\Trakt\Api;

use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Search\ById as ByIdRequest;
use TraktPHPApi\Trakt\Request\Search\ByText as ByTextRequest;

class Search extends Endpoint
{
    /**
     * @param $idType
     * @param $mediaId
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
	public function byId($idType, $mediaId, AccessToken $token = null)
    {
        return $this->request(new ByIdRequest($idType, $mediaId, $token));
    }

    /**
     * @param $query
     * @param null $type
     * @param null $year
     * @param \League\OAuth2\Client\Token\AccessToken|null $token
     * @return mixed
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     */
    public function byText($query, $type = null, $year = null, AccessToken $token = null)
    {
        return $this->request(new ByTextRequest($query, $type, $year, $token));
    }

}

