<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 16/03/15
 * Time: 17:36
 */

namespace TraktPHPApi\Trakt\Media;


class Season extends Media
{

    protected $standard = ['number', 'ids'];

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->media->number;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->media->ids;
    }
}