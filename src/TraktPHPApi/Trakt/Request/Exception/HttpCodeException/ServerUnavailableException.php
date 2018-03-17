<?php
namespace TraktPHPApi\Trakt\Request\Exception\HttpCodeException;


class ServerUnavailableException extends \Exception
{

    protected $message = "Service Unavailable - server overloaded";

}
