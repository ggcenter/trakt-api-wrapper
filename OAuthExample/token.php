<?php
use Dotenv\Dotenv;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Auth\TraktProvider;
use NNTmux\Trakt\Trakt;
use NNTmux\Trakt\TraktHttpClient;

require '../vendor/autoload.php';
session_start();
(new Dotenv(__DIR__ . '/../'))->load();

$provider = new TraktProvider(getenv('CLIENT_ID'), getenv('CLIENT_SECRET'), getenv('TRAKT_REDIRECT_URI'));
$auth = new Auth($provider);

$trakt = new Trakt($auth, TraktHttpClient::make());

try {
	$token = $trakt->auth->token('token-retrieval-code-here');
} catch (\NNTmux\Trakt\Exception\InvalidOauthRequestException $e) {
	echo $e->getMessage();
}