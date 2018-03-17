<?php


use TraktPHPApi\Trakt\Api\Users\Follow;
use TraktPHPApi\Trakt\Api\Users\Followers;
use TraktPHPApi\Trakt\Auth\Auth;
use TraktPHPApi\Trakt\Auth\TraktProvider;
use TraktPHPApi\Trakt\Trakt;

class PropertiesTest extends PHPUnit\Framework\TestCase
{

    protected function tearDown()
    {
        Mockery::close();
    }

    public function testPropertiesOfRequestObjectAreRequestObjects()
    {
        $auth = new Auth(new TraktProvider(get_client_id(), get_client_secret(), get_redirect_url()));

        $trakt = new Trakt($auth);

        $this->assertInstanceOf(Followers::class, $trakt->users->followers);
    }
}
