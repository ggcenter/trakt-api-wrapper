<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 22/02/15
 * Time: 14:49
 */

namespace TraktPHPApi\Trakt\Auth;


use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Request\Parameters\AccessToken as TokenParameter;

class Token
{
    /**
     * @param $token
     * @param $type
     * @param $expires
     * @param $refresh
     * @param $scope
     * @return \League\OAuth2\Client\Token\AccessToken
     * @throws \InvalidArgumentException
     */
    public static function create($token, $type, $expires, $refresh, $scope)
    {
        return new AccessToken(
            [
                'access_token' => $token,
                'token_type' => $type,
                'expires_in' => $expires,
                'refresh_token' => $refresh,
                'scope' => $scope
            ]
        );

    }

}