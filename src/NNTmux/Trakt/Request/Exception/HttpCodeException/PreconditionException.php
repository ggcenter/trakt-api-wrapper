<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class PreconditionException extends \Exception
{

    protected $message = "Precondition Failed - use application/json content type";

}
