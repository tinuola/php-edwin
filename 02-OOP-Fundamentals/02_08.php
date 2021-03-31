<?php
// Setters and Getters

class Car {

    private $doors = 4;
    // Property can only be accessed in this class

    function get_values(){

        echo $this->doors;

    }

    function set_values(){

        $this->doors = 6;
        
    }

}

$bmw = new Car;

// echo $bmw->doors;
// Cannot access private property
// Have to use setters/getters

$bmw->set_values();

$bmw->get_values();