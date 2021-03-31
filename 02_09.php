<?php
// Referencing Parent Class with Static

class Car {

    static $wheels = 4;
    static $doors = 2;

    static function car_detail(){
        return self::$wheels;  
    }

}

// Subclass using keyword 'parent'
class Truck extends Car {

    static function display(){
        echo parent::car_detail();
    }

}


Truck::display();

// echo Car::car_detail();