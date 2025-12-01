<?php

class TimeData {
    private $hours;
    private $minutes;

    public function __construct($hours, $minutes) {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public function getInfo() {
        return "Часы: {$this->hours}, Минуты: {$this->minutes}";
    }

    public function getTotalMinutes() {
        return $this->hours * 60 + $this->minutes;
    }
}
