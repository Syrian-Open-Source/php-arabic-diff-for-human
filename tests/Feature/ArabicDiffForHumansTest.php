<?php

namespace SOS\ArabicDiffForHumans\Tests\Feature;


use PHPUnit\Framework\TestCase;
use SOS\ArabicDiffForHumans\Classes\ArabicDiffForHumans;

class ArabicDiffForHumansTest extends TestCase
{
    /**
     * test a given date.
     *
     * @return void
     * @throws \Exception
     *
     */
    public function test_your_function_use_case()
    {
        $instance = (new ArabicDiffForHumans());
        $time = "2018-1-1";

        $timeStamp = strtotime($time);

        $this->assertEquals('منذ 3 سنين' , $instance->getFromDateString($time));

        $this->assertEquals('منذ 3 سنين' , $instance->get($timeStamp));
    }
}
