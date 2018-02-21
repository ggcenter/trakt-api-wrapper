<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class ForbiddenException extends \Exception
{

    protected $message = 'Forbidden - invalid API key or unapproved app';

}
