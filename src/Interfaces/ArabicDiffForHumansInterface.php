<?php

namespace SOS\ArabicDiffForHumans\Interfaces;

interface ArabicDiffForHumansInterface
{

    /**
     * get the date from the string date object.
     *
     * @param $date
     *
     * @return mixed
     * @author karam mustafa
     */
    public function getFromDateString($date);

    /**
     * get the date from the time object.
     *
     * @param $date
     *
     * @return mixed
     * @author karam mustafa
     */
    public function get($date);
}
