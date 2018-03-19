<?php


namespace TraktPHPApi\Trakt\Api;


use GuzzleHttp\ClientInterface;
use Illuminate\Support\Collection;
use TraktPHPApi\Trakt\Request\AbstractRequest;

abstract class Endpoint
{

    /**
     * @var Collection
     */
    private $extended;

    /**
     * @var int 
     */
    private $page = 1;

    /**
     * @var int 
     */
    private $limit = 10;

    /**
     * @var string 
     */
    private $clientId;
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Endpoint constructor.
     *
     * @param $clientId
     * @param \GuzzleHttp\ClientInterface $client
     * @throws \ReflectionException
     */
    public function __construct($clientId, ClientInterface $client)
    {
        $this->clientId = $clientId;
        $this->client = $client;
        $this->extended = new Collection(['min']);

        $reflection = new \ReflectionClass($this);
        foreach ($reflection->getProperties() as $property) {
            $name = $property->getName();
            $class = $this->parseDockBlock($property->getDocComment());
            $this->{$name} = $class->newInstanceArgs([$this->clientId, $this->client]);
        }

    }

    /**
     * @return $this
     */
    public function withImages(): self
    {
        if (!$this->extended->contains('images')) {
            return $this->extend('images');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function withFull(): self
    {
        return $this->extend('full');
    }

    /**
     * @return $this
     */
    public function withEpisodes(): self
    {
        return $this->extend('episodes');
    }

    /**
     * @return $this
     */
    public function withoutSeasons(): self
    {
        return $this->extend('noseasons');
    }

    /**
     * @param mixed $page
     * @return $this
     */
    public function page($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Requests the abstract request. But before it does so, it sets a few properties
     * on the request like the extended level, page and it's limit
     *
     * @param AbstractRequest $request
     * @return mixed
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\RateLimitExceededException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerErrorException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\ServerUnavailableException
     * @throws \TraktPHPApi\Trakt\Request\Exception\HttpCodeException\StatusCodeException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request(AbstractRequest $request)
    {
        return $request
            ->setExtended($this->extended->implode(','))
            ->setPage($this->page)
            ->setLimit($this->limit)
            ->make($this->clientId, $this->client);
    }

    /**
     * @param $level
     * @return $this
     */
    private function extend($level): self
    {
        $this->extended->forget(0);
        $this->extended->push($level);
        return $this;
    }

    /**
     * @param $dockBlock
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    private function parseDockBlock($dockBlock): \ReflectionClass
    {
        $match = [];
        preg_match('/(?<=@var\s).+/', $dockBlock, $match);
        return new \ReflectionClass($match[0]);
    }
}