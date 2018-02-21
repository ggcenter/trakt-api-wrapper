<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class NotFoundException extends \Exception
{

    protected $message = 'Not Found - method exists, but no record found';

}
