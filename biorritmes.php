<?php

    class Biorhythm
    {

        public function getDate($date) 
        {

            $today = new DateTime();

            $diff = date_diff($date, $today);

            return $diff->format('%R%a');

        }

        public function getPercent($days, $periode) {

            $cicle = $days / $periode;

            $radiants = ((2 * M_PI) * $cicle);

            $sinus = sin($radiants);

            $percent = ((($sinus + 1) * 100) / 2);

            return number_format($percent, 2);

        }

    }

?>