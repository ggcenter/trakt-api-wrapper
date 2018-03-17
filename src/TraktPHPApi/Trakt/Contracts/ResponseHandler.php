<?php namespace TraktPHPApi\Trakt\Contracts;

use GuzzleHttp\ClientInterface;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;


/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 17:24
 */
interface ResponseHandler
{
    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param \GuzzleHttp\ClientInterface $client
     * @return mixed
     */
    public function handle(ResponseInterface $response, ClientInterface $client);

    /**
     * @param $id
     * @return mixed
     */
    public function setClientId($id);

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $token
     * @return mixed
     */
    public function setToken(AccessToken $token);
}