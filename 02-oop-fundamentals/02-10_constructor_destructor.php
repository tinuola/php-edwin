<?php
// Constructors and Destructors

class Car {
    
    public $wheels = 6;

    static $doors = 2;

    // Echoes the property automatically when instance is created
    function __construct(){
        // echo $this->wheels;
        // echo '<br>'; 
        echo self::$doors++;
        echo '<br>';
        // Each instance increments value
    }

    // Destructor method not used as often
    // Uninitializes
    function __destruct(){
        echo self::$doors--;
        echo '<br>';
    }
}

$bmw = new Car;

$toyota = new Car;

$subaru = new Car;