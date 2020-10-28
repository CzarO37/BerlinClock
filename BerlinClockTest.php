<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use BerlinClock\BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{

    private $berlinClock;

    protected function setUp(): void{
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    //Test for convertMinutes
    public function test_convertMinutes_given0_shouldReturnOOOO() {
        $actual = $this->actConvertMinutes(0);

        $this->assertEquals("OOOO",$actual);
    }

    public function test_convertMinutes_given1_shouldReturnYOOO() {
        $actual = $this->actConvertMinutes(1);

        $this->assertEquals("YOOO",$actual);
    }

    public function test_convertMinutes_given2_shouldReturnYYOO() {
        $actual = $this->actConvertMinutes(2);

        $this->assertEquals("YYOO",$actual);
    }

    public function test_convertMinutes_given3_shouldReturnYYYO() {
        $actual = $this->actConvertMinutes(3);

        $this->assertEquals("YYYO",$actual);
    }

    public function test_convertMinutes_given4_shouldReturnYYYY() {
        $actual = $this->actConvertMinutes(4);

        $this->assertEquals("YYYY",$actual);
    }

    public function test_convertMinutes_given5_shouldReturnOOOO(){
        $actual = $this->actConvertMinutes(5);

        $this->assertEquals("OOOO", $actual);
    }

    public function test_convertMinutes_given6_shouldReturnYOOO() {
        $actual = $this->actConvertMinutes(6);

        $this->assertEquals("YOOO", $actual);
    }

    private function actConvertMinutes(int $minutes): string{
        return $this->berlinClock->convertMinutes($minutes);
    }

    //Test for convert5Minutes
    public function test_convert5Minutes_given3_shouldReturnOOOOOOOOOOO() {
        $actual = $this->actConvert5Minutes(3);

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function test_convert5Minutes_given5_shouldReturnYOOOOOOOOOO() {
        $actual = $this->actConvert5Minutes(5);

        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function test_convert5Minutes_given14_shouldReturnYYOOOOOOOOO() {
        $actual = $this->actConvert5Minutes(14);

        $this->assertEquals("YYOOOOOOOOO", $actual);
    }

    public function test_convert5Minutes_given15_shouldReturnYYROOOOOOOO() {
        $actual = $this->actConvert5Minutes(15);

        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    public function test_convert5Minutes_given59_shouldReturnYYRYYRYYRYY(){
        $actual = $this->actConvert5Minutes(59);

        $this->assertEquals("YYRYYRYYRYY", $actual);
    }

    private function actConvert5Minutes(int $minutes): string{
        return $this->berlinClock->convert5Minutes($minutes);
    }


    //Test for convertHours
    public function test_convertHours_given2_shouldReturnRROO(){
        $actual = $this->actConvertHours(2);

        $this->assertEquals("RROO", $actual);
    }

    public function test_convertHours_given4_shouldReturnRRRR(){
        $actual = $this->actConvertHours(2);

        $this->assertEquals("RROO", $actual);
    }

    private function actConvertHours(int $hours): string{
        return $this->berlinClock->convertHours($hours);
    }
}
