<?php


use TraktPHPApi\Trakt\Api\Calendars;
use TraktPHPApi\Trakt\Api\Users;
use TraktPHPApi\Trakt\Auth\Auth;
use TraktPHPApi\Trakt\Auth\TraktProvider;
use TraktPHPApi\Trakt\Trakt;
use TraktPHPApi\Trakt\TraktHttpClient;

class ExtendedInfoTest extends PHPUnit\Framework\TestCase
{

    public function testCanSetExtendedLevelOnEndpoint()
    {
        $endpoint = new Calendars\My(
            get_client_id(), mock_client(
                200,
                '[
                    {
                        "episode":{"images": ""}
                    }
                ]'
            )
        );

        $endpoint->withImages()->withFull();

        $calendar = $endpoint->shows(get_token());

        $first = $calendar->first();

        $this->assertObjectHasAttribute("images", $first->episode);

    }
}
