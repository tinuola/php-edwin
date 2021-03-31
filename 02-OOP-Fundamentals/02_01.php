<?php
// Defining Classes

class Cars {

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    # code...
    echo $class . "<br>";
    // Displays all classes defined in php including Cars which we defined
}