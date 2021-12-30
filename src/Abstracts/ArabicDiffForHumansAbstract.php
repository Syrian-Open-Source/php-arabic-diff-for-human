<?php

namespace SOS\ArabicDiffForHumans\Abstracts;

/**
 * Class ArabicDiffForHumansAbstract
 *
 * @author karam mustafa
 * @package SOS\ArabicDiffForHumans\Classes
 */
abstract class ArabicDiffForHumansAbstract
{

    /**
     *
     *
     * @param $diff
     * @param $unit
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function DiffValue($diff, $unit)
    {
        $diffValue = 0;

        switch ($unit) {
            case 1:
                $diffValue = $diff;
                break;
            case 2:
                $diffValue = $this->getMinutes($diff);
                break;
            case 3:
                $diffValue = $this->getHours($diff);
                break;
            case 4:
                $diffValue = $this->getDays($diff);
                break;
            case 5:
                $diffValue = $this->getMonths($diff);
                break;
            case 6:
                $diffValue = $this->getYears($diff);
        }
        return $diffValue;
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
     * @author karam mustafa
     */
    protected function unit($diff)
    {
        if ($diff < 60) {
            return 1;
        } // seconds
        else {
            if ($diff < 60 * 60) {
                return 2;
            } // minutes
            else {
                if ($diff < 24 * 60 * 60) {
                    return 3;
                } // hours
                else {
                    if ($diff < 24 * 60 * 60 * 30) {
                        return 4;
                    } //days
                    else {
                        if ($diff < 24 * 60 * 60 * 365) {
                            return 5;
                        } // months
                        else {
                            return 6;
                        }
                    }
                }
            }
        } //years
    }

    /**
     *
     *
     * @param $diff
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getMinutes($diff)
    {
        return $diff / 60;
    }

    /**
     *
     *
     * @param $diff
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getHours($diff)
    {
        return $diff / (60 * 60);
    }

    /**
     *
     *
     * @param $diff
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getDays($diff)
    {
        return $diff / (60 * 60 * 24);
    }

    /**
     *
     *
     * @param $diff
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getMonths($diff)
    {
        return $diff / (60 * 60 * 24 * 30);
    }

    /**
     *
     *
     * @param $diff
     *
     * @return float|int
     * @author karam mustafa
     */
    protected function getYears($diff)
    {
        return $diff / (365 * 24 * 60 * 60);
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
