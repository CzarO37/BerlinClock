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

    //Tests for convertMinutes
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

    //Tests for convert5Minutes
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


    //Tests for convertHours
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


    //Tests for convert5Hours
    public function test_convert5Hours_given3_shouldReturnOOOO() {
        $actual = $this->actConvert5Hours(3);

        $this->assertEquals("OOOO", $actual);
    }

    public function test_convert5Hours_given17_shouldReturnRRRO() {
        $actual = $this->actConvert5Hours(17);

        $this->assertEquals("RRRO", $actual);
    }

    public function test_convert5Hours_given23_shouldReturnRRRR() {
        $actual = $this->actConvert5Hours(23);

        $this->assertEquals("RRRR", $actual);
    }

    private function actConvert5Hours(int $hours): string{
        return $this->berlinClock->convert5Hours($hours);
    }

    //Tests for convertSeconds
    public function test_convertSeconds_given0_shouldReturnO() {
        $actual = $this->actConvertSeconds(0);

        $this->assertEquals("O", $actual);
    }

    public function test_convertSeconds_given1_shouldReturnR() {
        $actual = $this->actConvertSeconds(1);

        $this->assertEquals("R", $actual);
    }

    public function test_convertSeconds_given37_shouldReturnR() {
        $actual = $this->actConvertSeconds(37);

        $this->assertEquals("R", $actual);
    }

    private function actConvertSeconds(int $seconds): string{
        return $this->berlinClock->convertSeconds($seconds);
    }

    //Tests for convertTime
    public function test_convertTime_givenMidnight_shouldReturnAllOff() {
        $actual = $this->actConvertTime("00:00:00");

        $this->assertEquals("O\nOOOO\nOOOO\nOOOOOOOOOOO\nOOOO\n", $actual);
    }

    public function test_convertTime_given23H59m59_shouldReturnAllOn() {
        $actual = $this->actConvertTime("23:59:59");

        $this->assertEquals("R\nRRRR\nRRRO\nYYRYYRYYRYY\nYYYY\n", $actual);
    }

    private function actConvertTime(string $time): string{
        return $this->berlinClock->convertTime($time);
    }
}
