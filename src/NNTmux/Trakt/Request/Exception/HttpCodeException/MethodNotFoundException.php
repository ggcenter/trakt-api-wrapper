<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class MethodNotFoundException extends \Exception
{

    protected $message = "Method Not Found - method doesn't exist";

}
