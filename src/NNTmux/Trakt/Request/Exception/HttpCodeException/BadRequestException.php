<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class BadRequestException extends \Exception
{

    protected $message = "Bad Request - request couldn't be parsed";

}
