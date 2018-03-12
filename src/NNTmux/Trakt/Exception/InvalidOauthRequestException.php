<?php namespace NNTmux\Trakt\Exception;

class InvalidOauthRequestException extends \Exception
{
    protected $message = 'There was an invalid Oauth request from Trakt';
}