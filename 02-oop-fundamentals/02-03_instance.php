<?php
// Instantiating a Class

class Car {

    function greeting(){
        echo "Hello Everyone!<br>";
    }

    function salutation( $name ){
        echo "Hello $name. <br>";
    }

}

// To instantiate a class
$porsche = new Car;

$lexus = new Car;

// To use the method
$porsche->greeting();
$porsche->salutation('Lisa');

$lexus->greeting();
$lexus->salutation('Teri');
