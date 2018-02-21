<?php
namespace NNTmux\Trakt\Request\Exception\HttpCodeException;


class UnprocessableEntityException extends \Exception
{

    protected $message = "Unprocessable Entity - validation errors";

}
