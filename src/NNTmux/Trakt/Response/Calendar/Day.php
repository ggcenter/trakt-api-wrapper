<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 17:12
 */

namespace NNTmux\Trakt\Response\Calendar;


use Illuminate\Support\Carbon;
use GuzzleHttp\ClientInterface;
use League\OAuth2\Client\Token\AccessToken;
use NNTmux\Trakt\Media\Media;
use NNTmux\Trakt\Media\Movie;
use NNTmux\Trakt\Media\Show;
use NNTmux\Trakt\Request\Parameters\Type;

class Day
{

    /**
     * @var Carbon
     */
    public $date;

    /**
     * @var Media[]
     */
    public $releases = [];

    private $id;
    /**
     * @var AccessToken
     */
    private $token;
    /**
     * @var Type
     */
    private $type;
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param $date
     * @param $items
     * @param Type $type
     * @param $id
     * @param AccessToken $token
     * @param ClientInterface $client
     */
    public function __construct($date, $items, Type $type, $id, $token, ClientInterface $client)
    {
        $this->id = $id;
        $this->token = $token;
        $this->type = $type;
        $this->client = $client;

        $this->setDate($date);
        $this->setReleases($items);


    }

    /**
     * @param $date
     * @return void
     */
    private function setDate($date)
    {
        $this->date = Carbon::createFromFormat("Y-m-d", $date, new \DateTimeZone("GMT"));
    }

    /**
     * @param $items
     */
    private function setReleases($items)
    {
        foreach ($items as $item) {
            if ($this->type == Type::movie()) {
                $this->releases[] = new Movie($item, $this->id, $this->token, $this->client);
            }
            if ($this->type == Type::show()) {
                $this->releases[] = new Show($item, $this->id, $this->token, $this->client);
            }
        }
    }
}