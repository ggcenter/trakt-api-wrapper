<?php

namespace TraktPHPApi\Trakt;

use GuzzleHttp\Client;

class TraktHttpClient
{

    public const API_URL = 'https://api.trakt.tv';

    public const API_VERSION = 2;
	
	/**
	 * @return \GuzzleHttp\Client
	 * @throws \InvalidArgumentException
	 */
    public static function make(): Client
    {

        return new Client(['base_uri' => [TraktHttpClient::API_URL, ['version' => TraktHttpClient::API_VERSION]]]);
    }
}
