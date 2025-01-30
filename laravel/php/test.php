<?php

class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function showBrand() {
        return $this->brand;
    }
}

$car = new Car("fuck");
echo $car->showBrand();
echo "\n";

?>