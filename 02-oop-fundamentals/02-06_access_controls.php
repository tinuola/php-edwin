<?php
// Access Control Modifiers
// Keywords to control flow
// Public, Private, Protected

class Car {

    public $wheels = 4;
    // Property can be used anywhere in program

    private $doors = 2;
    // Property can only be accessed in this class

    protected $gear = 'Automatic';
    // Only available inside the class and in subclasses

    function car_detail(){
        echo $this->wheels. '<br>';
        echo $this->doors. '<br>';
        echo $this->gear. '<br>';        
    }

}

$bmw = new Car;

// echo $bmw->wheels;
// public - will appear

// echo $bmw->doors;
// private - will get error

// echo $bmw->gear;
// protected - will get error

// echo $bmw->car_detail();
// All will appear