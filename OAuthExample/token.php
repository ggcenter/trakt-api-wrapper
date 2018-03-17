<?php
use Dotenv\Dotenv;
use TraktPHPApi\Trakt\Auth\Auth;
use TraktPHPApi\Trakt\Auth\TraktProvider;
use TraktPHPApi\Trakt\Trakt;
use TraktPHPApi\Trakt\TraktHttpClient;

require '../vendor/autoload.php';
session_start();
(new Dotenv(__DIR__ . '/../'))->load();

$provider = new TraktProvider(getenv('CLIENT_ID'), getenv('CLIENT_SECRET'), getenv('TRAKT_REDIRECT_URI'));
$auth = new Auth($provider);

$trakt = new Trakt($auth, TraktHttpClient::make());

try {
	$token = $trakt->auth->token('token-retrieval-code-here');
} catch (\TraktPHPApi\Trakt\Exception\InvalidOauthRequestException $e) {
	echo $e->getMessage();
}