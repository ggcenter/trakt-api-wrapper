<?php
use TraktPHPApi\Trakt\Request\RequestType;
use TraktPHPApi\Trakt\Request\Users\Settings;
use TraktPHPApi\Trakt\Trakt;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 25/02/15
 * Time: 14:18
 */
class SettingsTest extends PHPUnit\Framework\TestCase
{

    public function testInitiation()
    {
        $settingsRequest = new Settings(get_token());

        $this->assertEquals(RequestType::GET, $settingsRequest->getRequestType());
        $this->assertEquals("users/settings", $settingsRequest->getUrl());
    }
}
