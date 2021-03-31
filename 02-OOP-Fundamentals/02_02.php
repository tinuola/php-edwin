<?php
// Defining methods

class Car {

    function greeting(){}

    function salutation(){}

    function declaration(){}

}

$the_methods = get_class_methods('Car');
// Get all the methods in the Cars class

foreach ($the_methods as $method) {
    # code...
    echo $method . '<br>';
}
// Prints out all the methods in the class