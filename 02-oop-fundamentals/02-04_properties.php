<?php
// Class Properties / Attributes / Variables

class Car {

    // Declare variable
    // Use var keyword inside of a class to declare variables
    var $wheel_count = 4;

    public $door_count = 2;

    function car_detail(){
        return "This has " . $this->wheel_count . " wheels.";
    }

    // $this refers to specific class object being referenced.
    // $this->wheel_count means get the wheel_count property of this class.

}

$bmw = new Car;

$lexus = new Car;

// Access the property
// $ sign not needed
echo $bmw->wheel_count;
echo '<br>';

// Change value
echo $bmw->wheel_count = 14;

echo '<br>';

echo $lexus->wheel_count;

echo '<br>';

echo $lexus->car_detail();

echo '<br>';

echo $bmw->car_detail();