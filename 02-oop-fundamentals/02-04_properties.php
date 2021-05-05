<?php
// Class Properties

class Car {

    // Declare variable
    // Use var -- is that older way?
    var $wheel_count = 4;

    public $door_count = 2;

    function car_detail(){
        return "This has " . $this->wheel_count . " wheels.";
    }

}

$bmw = new Car;

$lexus = new Car;

// Access the property
// $ sign not needed
// echo $bmw->wheel_count;

// Change value
echo $bmw->wheel_count = 14;

echo '<br>';

echo $lexus->wheel_count;

echo '<br>';

echo $lexus->car_detail();

echo '<br>';

echo $bmw->car_detail();