<?php

namespace SOS\ArabicDiffForHumans\Abstracts;

/**
 * Class ArabicDiffForHumansAbstract
 *
 * @author karam mustafa, Abdussalam Al-Ali
 * @package SOS\ArabicDiffForHumans\Classes
 */
abstract class ArabicDiffForHumansAbstract
{
    private $toDivideBy =
        [
            1, // seconds [0]
            60, // minute [1]
            60 * 60, // hours [2]
            60 * 60 * 24, // days [3]
            60 * 60 * 24 * 30, // months [4]
            60 * 60 * 24 * 365, // years [5]
        ];

    /**
     *
     *
     * @param $diff
     * @param $unit
     *
     * @return float|int
     * @author Abdussalam Al-Ali
     */
    protected function DiffValue($diff, $unit)
    {
        return ($diff / $this->toDivideBy[$unit - 1]);
    }

    /**
     *
     *
     * @param $timestamp
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getDifference($timestamp)
    {
        return abs(time() - $timestamp);
    }

    /**
     *
     *
     * @param $diff
     *
     * @return int
     * @author Abdussalam Al-Ali
     */
    protected function unit($diff)
    {
        if ($diff < 60) {
            return 1;
        } // seconds
        if ($diff < 60 * 60) {
            return 2;
        } // minutes
        if ($diff < 24 * 60 * 60) {
            return 3;
        } // hours
        if ($diff < 24 * 60 * 60 * 30) {
            return 4;
        } //days
        if ($diff < 24 * 60 * 60 * 365) {
            return 5;
        } // months

        return 6; //years
    }

    /**
     *
     *
     * @param $valueOfDifference
     * @param $single
     * @param $double
     * @param $plural
     *
     * @return string
     * @author karam mustafa
     */
    protected function formatResult($valueOfDifference, $single, $double, $plural)
    {
        if ($valueOfDifference == 1) {
            return "منذ ".$single;
        }

        if ($valueOfDifference == 2) {
            return " منذ ".$double;
        }

        if ($valueOfDifference <= 10) {
            return "منذ ".$valueOfDifference." ".$plural;
        }

        return "منذ ".$valueOfDifference." ".$single;
    }
}
