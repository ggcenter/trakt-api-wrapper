<?php

namespace NNTmux\Trakt\Auth;

use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Exception\InvalidOauthRequestException;

class Auth
{
    /**
     * @var \NNTmux\Trakt\Auth\TraktProvider
     */
    public $provider;

    /**
     * @param TraktProvider $provider
     */
    public function __construct(TraktProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return mixed
     */
    public function authorize()
    {
        $_SESSION['trakt_oauth_state'] = $this->provider->getState();
        return $this->provider->authorize();
    }

    /**
     * @param $code
     * @return \League\OAuth2\Client\Token\AccessToken
     * @throws \NNTmux\Trakt\Exception\InvalidOauthRequestException
     */
    public function token($code): ?AccessToken
    {
        try {
            return $this->provider->getAccessToken('authorization_code', ['code' => $code]);
        } catch (\Exception $exception) {
            throw new InvalidOauthRequestException;
        }
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return (empty($_GET['state']) || ($_GET['state'] === $_SESSION['trakt_oauth_state']));
    }

    /**
     *
     */
    public function invalid()
    {
        unset($_SESSION['trakt_oauth_state']);
    }

    /**
     * @param $refreshToken
     * @return \League\OAuth2\Client\Token\AccessToken
     */
    public function refresh($refreshToken): AccessToken
    {
        return $this->provider->getAccessToken('refresh_token', ['refresh_token' => $refreshToken, 'code' => $refreshToken]);
    }

    /**
     * @param $token
     * @param $type
     * @param $expires
     * @param $refresh
     * @param $scope
     * @return \League\OAuth2\Client\Token\AccessToken
     * @throws \InvalidArgumentException
     */
    public function createToken($token, $type, $expires, $refresh, $scope): AccessToken
    {
        return Token::create($token, $type, $expires, $refresh, $scope);
    }
}
