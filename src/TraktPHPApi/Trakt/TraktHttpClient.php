<?php

namespace TraktPHPApi\Trakt;

use GuzzleHttp\Client;

class TraktHttpClient
{

    public const API_URL = 'https://api.trakt.tv';
	
	/**
	 * @return \GuzzleHttp\Client
	 * @throws \InvalidArgumentException
	 */
    public static function make(): Client
    {
        return new Client(['base_uri' => static::API_URL]);
    }
}
