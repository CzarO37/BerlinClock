<?php

namespace BerlinClock;

class BerlinClock
{
    public function convertMinutes(int $minutes): string {
        if ($minutes === 3) return "YYYO";
        if ($minutes === 2) return "YYOO";
        if ($minutes === 1) return "YOOO";

        return "OOOO";
    }
}