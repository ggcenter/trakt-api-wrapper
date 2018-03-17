<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 26/02/15
 * Time: 00:52
 */

namespace TraktPHPApi\Trakt\Request\Parameters;

use Illuminate\Support\Carbon;

trait TimePeriod
{

    /**
     * @var Carbon
     */
    private $startDate;

    private $days;

    /**
     * @param $startDate
     */
    protected function setStartDate(Carbon $startDate = null)
    {
        if (is_null($startDate)) {
            $startDate = Carbon::today();
        }

        $this->startDate = $startDate;
    }

    public function setDays($days = null)
    {
        if (is_null($days)) {
            $days = 7;
        }

        $this->days = $days;
    }

    public function getStartDate()
    {
        return $this->startDate->format("Y-m-d");
    }

    public function getDays()
    {
        return $this->days;
    }

}