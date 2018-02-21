<?php


use NNTmux\Trakt\Api\Calendars;
use NNTmux\Trakt\Api\Users;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Auth\TraktProvider;
use NNTmux\Trakt\Trakt;
use NNTmux\Trakt\TraktHttpClient;

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
