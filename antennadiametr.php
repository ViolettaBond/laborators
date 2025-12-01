<?php
class Antenna {
    public $diameter;
    public $material;
    public $price;

    function __construct($diameter, $material, $price) {
        $this->diameter = $diameter;
        $this->material = $material;
        $this->price = $price;
    }

    function quality() {
        return $this->diameter / $this->price;
    }

    function info() {
        return "Диаметр: {$this->diameter}, Материал: {$this->material}, Цена: {$this->price}";
    }
}
