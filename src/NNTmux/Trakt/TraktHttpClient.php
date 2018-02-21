<?php

namespace NNTmux\Trakt;

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

        return new Client(['base_url' => [self::API_URL, ['version' => self::API_VERSION]]]);
    }
}
