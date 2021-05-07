<?php
// Setters and Getters
// Usually set and get values from private properties


class Car {

    private $doors = 4;
    // Private property can only be accessed in this class

    function get_values(){

        echo $this->doors;
        echo '<br>';

    }

    function set_values(){

        $this->doors = 6;
        
    }

}

$bmw = new Car;

// echo $bmw->doors;
// Cannot access private property
// Have to use setters/getters

$bmw->get_values();

$bmw->set_values();

$bmw->get_values();