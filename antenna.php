<?php
require_once "antennadiametr.php";

class AdvancedAntenna extends Antenna {
    public $type;

    function __construct($diameter, $material, $price, $type) {
        parent::__construct($diameter, $material, $price);
        $this->type = $type;
    }

    function quality() {
        $q = parent::quality();

        switch ($this->type) {
            case "азимутальная":
                return $q;
            case "полярная":
                return 2 * $q;
            case "тороидальная":
                return 2.5 * $q;
            default:
                return $q;
        }
    }

    function info() {
        return parent::info() . ", Тип подвески: {$this->type}";
    }
}
