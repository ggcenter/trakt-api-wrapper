<?php
namespace NNTmux\Trakt\Auth;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;

class TraktProvider extends AbstractProvider
{

    /**
     * @param integer $clientId
     * @param $clientSecret
     * @param $redirectUrl
     * @param string $state
     * @param string $type
     */
    public function __construct($clientId, $clientSecret, $redirectUrl, $state = 'state', $type = 'code')
    {
        parent::__construct(
            [
                "clientId" => (string)$clientId,
                "clientSecret" => $clientSecret,
                "redirectUri" => $redirectUrl,
                "state" => $state,
                "response_type" => $type
            ]
        );
    }


    /**
     * Get the URL that this provider uses to begin authorization.
     *
     * @return string
     */
    public function urlAuthorize()
    {
        return 'https://trakt.tv/oauth/authorize';
    }

    public function getAuthorizationUrl($options = [])
    {
        $this->state = $options['state'] ?? md5(uniqid(mt_rand(), true));
        $params = [
            'response_type' => $options['response_type'] ?? 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'state' => $this->state
        ];

        return $this->urlAuthorize() . '?' . $this->httpBuildQuery($params, '', '&');
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Get the URL that this provider users to request an access token.
     *
     * @return string
     */
    public function urlAccessToken()
    {
        return 'https://trakt.tv/oauth/token';
    }

    public function urlUserDetails(AccessToken $token)
    {
    }

    public function userDetails($response, AccessToken $token)
    {
    }
	
	
	/**
	 * Returns the base URL for authorizing a client.
	 *
	 * Eg. https://oauth.service.com/authorize
	 *
	 * @return string
	 */
	public function getBaseAuthorizationUrl()
	{
		// TODO: Implement getBaseAuthorizationUrl() method.
	}
	
	/**
	 * Returns the base URL for requesting an access token.
	 *
	 * Eg. https://oauth.service.com/token
	 *
	 * @param array $params
	 *
	 * @return string
	 */
	public function getBaseAccessTokenUrl(array $params)
	{
		// TODO: Implement getBaseAccessTokenUrl() method.
	}
	
	/**
	 * Returns the URL for requesting the resource owner's details.
	 *
	 * @param AccessToken $token
	 *
	 * @return string
	 */
	public function getResourceOwnerDetailsUrl(AccessToken $token)
	{
		// TODO: Implement getResourceOwnerDetailsUrl() method.
	}
	
	/**
	 * Returns the default scopes used by this provider.
	 *
	 * This should only be the scopes that are required to request the details
	 * of the resource owner, rather than all the available scopes.
	 *
	 * @return array
	 */
	protected function getDefaultScopes()
	{
		// TODO: Implement getDefaultScopes() method.
	}
	
	/**
	 * Checks a provider response for errors.
	 *
	 * @throws IdentityProviderException
	 *
	 * @param  ResponseInterface $response
	 * @param  array|string      $data Parsed response data
	 *
	 * @return void
	 */
	protected function checkResponse(ResponseInterface $response, $data)
	{
		// TODO: Implement checkResponse() method.
	}
	
	/**
	 * Generates a resource owner object from a successful resource owner
	 * details request.
	 *
	 * @param  array       $response
	 * @param  AccessToken $token
	 *
	 * @return ResourceOwnerInterface
	 */
	protected function createResourceOwner(array $response, AccessToken $token)
	{
		// TODO: Implement createResourceOwner() method.
}}