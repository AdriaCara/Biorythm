<?php

class Biorhythm
{

    public function getDate($date)
    {

        $today = new DateTime();

        $diff = date_diff($date, $today);

        $diff = str_replace("+", "", $diff->format('%R%a'));

        return $diff;
    }

    public function getPercent($days, $periode)
    {

        $cicle = $days / $periode;

        $radiants = ((2 * M_PI) * $cicle);

        $sinus = sin($radiants);

        $percent = ((($sinus + 1) * 100) / 2);

        return number_format($percent, 2);
    }
}