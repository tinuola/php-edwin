<?php
// Class Inheritance

class Car {

    public $wheels = 4;

    function car_detail(){
        return 'I\'m a Car.';        
    }

}

$bmw = new Car;


class Truck extends Car {

}

$tacoma = new Truck;

echo $tacoma->wheels;
echo '<br>';
echo $tacoma->car_detail();