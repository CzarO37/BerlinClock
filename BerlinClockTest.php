<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use BerlinClock\BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function test_convertMinutes_given0_shouldReturnOOOO() {
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->convertMinutes(0);

        $this->assertEquals("OOOO",$actual);
    }
}
