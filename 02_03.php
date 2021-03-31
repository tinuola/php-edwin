<?php
// Instantiating a Class

class Car {

    function greeting(){
        echo "Hello Everyone!";
    }

}

// To instantiate a class
$porsche = new Car;

$lexus = new Car;

// To use the method
$porsche->greeting();