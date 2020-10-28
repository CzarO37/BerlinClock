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
                if ($i%3 === 0){
                    $res = $res . "R";
                } else {
                    $res = $res . "Y";
                }
            }
            else {
                $res = $res . "O";
            }
        }
        return $res;
    }

    public function convertHours(int $hours): string {
        $mod = $hours%5;
        $Rs = str_repeat("R",$mod);
        $Os = str_repeat("O",4-$mod);
        return $Rs . $Os;
    }

    public function convert5Hours(int $hours): string {
        $numberLights = floor($hours/5);
        $Rs = str_repeat("R",$numberLights);
        $Os = str_repeat("O",4-$numberLights);
        return $Rs . $Os;
    }

    public function convertSeconds(int $seconds): string {
        return ($seconds%2 === 0) ? "O" : "R";
    }
}