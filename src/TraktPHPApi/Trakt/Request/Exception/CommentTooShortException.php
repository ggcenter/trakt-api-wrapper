<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 16:46
 */

namespace TraktPHPApi\Trakt\Request\Exception;


/**
 * Class CommentTooShortException
 * @package TraktPHPApi\Trakt\Request\Exception
 */
class CommentTooShortException extends \Exception
{
    protected $message = "A shout should be 5 words ore more";
}