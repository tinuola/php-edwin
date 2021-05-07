<?php
// Static Modifiers
// Do not need a class instance to use its static properties and methods

class Car {

    // public $wheels = 4;
    static $wheels = 4;
    static $doors = 2;
    // protected $gear = 'Automatic';

    static function car_detail(){
        echo self::$wheels. '<br>';
        echo Car::$doors. '<br>';   
    }
    // Can use class name or "Self"

}

// $bmw = new Car;
// echo $bmw->wheels;

// echo $bmw->doors;
// Displays error that this is a static property

// To see the static property doors:
// echo Car::$doors;
// Have to use the $ sign with static modifiers

// Calling static method
// echo Car::car_detail();