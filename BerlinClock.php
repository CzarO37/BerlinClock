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
}