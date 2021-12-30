<?php

namespace SOS\ArabicDiffForHumans\Classes;

use SOS\ArabicDiffForHumans\Abstracts\ArabicDiffForHumansAbstract;
use SOS\ArabicDiffForHumans\Interfaces\ArabicDiffForHumansInterface;

/**
 * Class ArabicDiffForHumans
 *
 * @author your name
 * @package SOS\ArabicDiffForHumans\Classes
 */
class ArabicDiffForHumans extends ArabicDiffForHumansAbstract implements ArabicDiffForHumansInterface
{
    private $formatted = [
        ["ثانية", "ثانيتين", "ثواني"],
        ["دقيقة", "دقيقتين", "دقائق"],
        ["ساعة", "ساعتين", "ساعات"],
        ["يوم", "يومين", "أيام"],
        ["شهر", "شهرين", "أشهر"],
        ["سنة", "سنتين", "سنين"],
    ];

    /**
     * @inheritDoc
     */
    public function getFromDateString($dateString)
    {
        $timeStamp = strtotime($dateString);

        return $this->get($timeStamp);
    }

    /**
     * @inheritDoc
     */
    public function get($timeStamp)
    {
        $diff = $this->getDifference($timeStamp);

        $unit = $this->unit($diff);

        $valueOfDifference = floor($this->DiffValue($diff, $unit));

        $result = "";

        foreach ($this->formatted as $key => $value) {
            if (($key + 1) == $unit) {
                $result = $this->formatResult($valueOfDifference, ...$value);
            }
        }
        return $result;
    }

}
