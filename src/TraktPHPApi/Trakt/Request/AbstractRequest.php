<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 11:08
 */

namespace TraktPHPApi\Trakt\Request;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Collection;
use League\OAuth2\Client\Token\AccessToken;
use TraktPHPApi\Trakt\Contracts\ResponseHandler;
use TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ExceptionStatusCodeFactory;
use TraktPHPApi\Trakt\Response\Handlers\DefaultResponseHandler;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractRequest
{
    /**
     * @var string
     */
    private $clientId;
	
	/**
	 * @var \Illuminate\Support\Collection
	 */
    protected $queryParams;
	
	/**
	 * @var
	 */
    protected $allowedExtended;

    /**
     * @var ResponseHandler
     */
    private $responseHandler;

    /**
     * @var AccessToken|null
     */
    private $token = null;
	
	/**
	 * @var
	 */
    private $extended;
	
	/**
	 * AbstractRequest constructor.
	 */
    public function __construct()
    {
        $this->queryParams = new Collection();

        $this->setResponseHandler(new DefaultResponseHandler());
    }
	
	/**
	 * @param $clientId
	 */
    public function setClientId($clientId): void
    {
        if ($clientId !== null) {
            $this->clientId = $clientId;
        }
    }
	
	/**
	 * @param \League\OAuth2\Client\Token\AccessToken|null $token
	 */
    public function setToken(AccessToken $token = null): void
    {
        $this->token = $token;
    }
	
	/**
	 * @param $level
	 *
	 * @return \TraktPHPApi\Trakt\Request\AbstractRequest
	 */
    public function setExtended($level): self
    {
        $this->addQueryParam('extended', $level);
        return $this;
    }
	
	/**
	 * @return mixed
	 */
    public function getExtended()
    {
        return $this->extended;
    }
	
	
	/**
	 * @param $page
	 *
	 * @return \TraktPHPApi\Trakt\Request\AbstractRequest
	 */
    public function setPage($page): AbstractRequest
    {
        $this->addQueryParam('page', $page);
        return $this;
    }

    /**
     * @param int $limit
     * @return AbstractRequest
     */
    public function setLimit($limit)
    {
        $this->addQueryParam('limit', $limit);
        return $this;
    }
	
	/**
	 * @param $key
	 * @param $value
	 *
	 * @return $this
	 */
    public function addQueryParam($key, $value): self
    {
        $this->queryParams->put($key, $value);
        return $this;
    }
	
	/**
	 * @param $params
	 *
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
    public function setQueryParams($params): self
    {
        if (\is_array($params)) {
            $this->queryParams = collect($params);
            return $this;
        }

        if ($params instanceof Collection) {
            $this->queryParams = $params;
            return $this;
        }

        throw new \InvalidArgumentException('The parameters should be an array or an instance of ' . Collection::class);
    }
	
	/**
	 * @param                                              $clientId
	 * @param \GuzzleHttp\ClientInterface                  $client
	 * @param \TraktPHPApi\Trakt\Contracts\ResponseHandler|null $responseHandler
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
	 * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
	 */
    public function make($clientId, ClientInterface $client, ResponseHandler $responseHandler = null)
    {
        $this->setResponseHandler($responseHandler);

        $this->setClientId($clientId);

        $response = $this->createRequest($client);
	
	    if ($response !== null && $this->notSuccessful($response)) {
	        throw ExceptionStatusCodeFactory::create($response->getStatusCode());
	    }

        return $this->handleResponse($response, $client);
    }
	
	/**
	 * @return string
	 * @throws \TraktPHPApi\Trakt\Exception\MalformedParameterException
	 */
    public function getUrl(): string
    {
        return UriBuilder::format($this);
    }

    /**
     * @param ResponseHandler $responseHandler
     */
    public function setResponseHandler(ResponseHandler $responseHandler = null): void
    {
        if ($responseHandler) {
            $this->responseHandler = $responseHandler;
        }
    }
	
	
	/**
	 * @param \Psr\Http\Message\ResponseInterface $response
	 * @param \GuzzleHttp\ClientInterface         $client
	 *
	 * @return mixed
	 */
    protected function handleResponse(ResponseInterface $response, ClientInterface $client)
    {
        $handler = $this->getResponseHandler();

        $handler->setClientId($this->clientId);
        $handler->setToken($this->token);

        return $handler->handle($response, $client);
    }
	
	/**
	 * @return \TraktPHPApi\Trakt\Contracts\ResponseHandler
	 */
    public function getResponseHandler(): ResponseHandler
    {
        return $this->responseHandler;
    }
	
	/**
	 * @return array
	 */
    protected function getPostBody(): array
    {
        return [];
    }

    /**
     * @return array
     */
    private function getOptions(): array
    {
        $options = [
	        'headers' => $this->getHeaders(),
	        'query'   => $this->queryParams->toArray()
        ];

        return $this->setBody($options);
    }

    /**
     * @return array
     */
    private function getHeaders(): array
    {
        $token = ($this->token === null) ? '' : 'Bearer ' . $this->token;
        return [
	        'content-type'      => 'application/json',
	        'Authorization'     => $token,
	        'trakt-api-version' => 2,
	        'trakt-api-key'     => $this->clientId
        ];
    }
	
	/**
	 * @param \Psr\Http\Message\ResponseInterface $response
	 *
	 * @return bool
	 */
    private function notSuccessful(ResponseInterface $response): bool
    {
        return (!\in_array($response->getStatusCode(), [200, 201, 204, 504], false));
    }

    /**
     * @param $options
     * @return mixed
     */
    private function setBody($options)
    {
        if ($this->needsPostBody()) {
            $options['body'] = json_encode($this->getPostBody());
            return $options;
        }

        return $options;
    }
	
	/**
	 * @return bool
	 */
    private function needsPostBody(): bool
    {
        return \in_array($this->getRequestType(), [RequestType::PUT, RequestType::POST], false);
    }
	
	/**
	 * @param \GuzzleHttp\ClientInterface $client
	 *
	 * @return \Psr\Http\Message\ResponseInterface
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \TraktPHPApi\Trakt\Exception\MalformedParameterException
	 */
    private function createRequest(ClientInterface $client): ResponseInterface
    {
        $request = $client->request(
            $this->getRequestType(),
            $this->getUrl(),
            $this->getOptions()
        );
        return $request;
    }
	
	/**
	 * @return mixed
	 */
    abstract public function getRequestType();
	
	/**
	 * @return mixed
	 */
    abstract public function getUri();
}