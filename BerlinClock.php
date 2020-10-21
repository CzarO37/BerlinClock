<?php

namespace BerlinClock;

class BerlinClock
{
    public function convertMinutes(int $minutes): string {
        $mod = $minutes%5;
        if ($mod === 4) return "YYYY";
        if ($mod === 3) return "YYYO";
        if ($mod === 2) return "YYOO";
        if ($mod === 1) return "YOOO";

        return "OOOO";
    }
}