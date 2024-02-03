<?php

class Car{
    // fields   

    private $brand;
    private $color;

    // constructor
public function __construct($brand, $color){
    $this->brand = $brand;
    $this->color = $color;
}
public function setBrand($brand){
    $this-> brand = $brand;
}



    
public function getCarInfo(){
    return "Brand: " . $this->brand.",<br> color: " . $this->color;
}



}

$car1 = new Car("goat", "bird");
echo $car1->getCarInfo();