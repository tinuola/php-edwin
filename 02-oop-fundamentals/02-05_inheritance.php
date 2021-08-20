<?php
// Class Inheritance

class Car {

    public $wheels = 4;

    function car_detail(){
        // return 'I\'m a Car.';
        return "I'm a " . get_class($this) . " with " . $this->wheels . ' wheels.' ;        
    }

}

$bmw = new Car;
echo $bmw->wheels;
echo '<br>';
echo $bmw->car_detail();

echo '<br><br>';

class Truck extends Car {
    
    public $wheels = 6;

}

$tacoma = new Truck;
echo $tacoma->wheels;
echo '<br>';
echo $tacoma->car_detail();