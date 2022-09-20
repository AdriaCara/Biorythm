<?php

class Biorhythm
{

    private $percentPhysical;
    private $percentEmotional;
    private $percentIntellectual;

    public function __construct($percentPhysical, $percentEmotional, $percentIntellectual) {

        $this->percentPhysical = $percentPhysical;
        $this->percentEmotional = $percentEmotional;
        $this->percentIntellectual = $percentIntellectual;

    }

    public function getPercentPhysical() {

        return $this->percentPhysical;

    }

    public function getPercentEmotional() {

        return $this->percentEmotional;

    }

    public function getPercentIntellectual() {

        return $this->percentIntellectual;

    }

    public function setPercentPhysical($days, $periode) {

        $cicle = $days / $periode;

        $radiants = ((2 * M_PI) * $cicle);

        $sinus = sin($radiants);

        $percent = ((($sinus + 1) * 100) / 2);

        $this->percentPhysical = number_format($percent, 2);

    }

    public function setPercentEmotional($days, $periode) {

        $cicle = $days / $periode;

        $radiants = ((2 * M_PI) * $cicle);

        $sinus = sin($radiants);

        $percent = ((($sinus + 1) * 100) / 2);

        $this->percentEmotional = number_format($percent, 2);

    }

    public function setPercentIntellectual($days, $periode) {

        $cicle = $days / $periode;

        $radiants = ((2 * M_PI) * $cicle);

        $sinus = sin($radiants);

        $percent = ((($sinus + 1) * 100) / 2);

        $this->percentIntellectual = number_format($percent, 2);

    }

    public function getDate($date)
    {

        $today = new DateTime();

        $diff = date_diff($date, $today);

        $diff = str_replace("+", "", $diff->format('%R%a'));

        return $diff;
    }

}