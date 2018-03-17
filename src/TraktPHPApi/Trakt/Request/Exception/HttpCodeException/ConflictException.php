<?php
namespace TraktPHPApi\Trakt\Request\Exception\HttpCodeException;


class ConflictException extends \Exception
{

    protected $message = "Conflict - resource already created";

}
