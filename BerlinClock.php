<?php

namespace BerlinClock;

class BerlinClock
{
    public function convertMinutes(int $minutes): string {
        $mod = $minutes%5;
        $Ys = str_repeat("Y",$mod);
        $Os = str_repeat("O",4-$mod);
        return $Ys . $Os;
    }

    public function convert5Minutes(int $minutes): string {
        $numberLights = floor($minutes/5);
        $res="";
        for ($i=1; $i<=11; $i++) {
            if ($i <= $numberLights) {
                $res = $res . "Y";
            }
            else {
                $res = $res . "O";
            }
        }
        return $res;
    }
}