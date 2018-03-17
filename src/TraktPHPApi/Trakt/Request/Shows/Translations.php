<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 18/03/15
 * Time: 15:02
 */

namespace TraktPHPApi\Trakt\Request\Shows;

use TraktPHPApi\Trakt\Request\AbstractRequest;
use TraktPHPApi\Trakt\Request\Parameters\MediaIdTrait;
use TraktPHPApi\Trakt\Request\Parameters\Language;
use TraktPHPApi\Trakt\Request\Parameters\MediaId;
use TraktPHPApi\Trakt\Request\RequestType;

class Translations extends AbstractRequest
{
    use MediaIdTrait;
    /**
     * @var
     */
    private $language;

    /**
     * @param int $mediaId
     * @param string $language
     */
    public function __construct($mediaId, $language)
    {
        parent::__construct();
        $this->id = $mediaId;
        $this->language = $language;
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }


    public function getUri()
    {
        return "shows/:id/translations/:language";
    }
}