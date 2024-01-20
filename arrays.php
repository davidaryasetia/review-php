<?php
/*
Array store multiple variable in one single variable.

3 types of array : 
- index array -> array with numeric index
- associative array -> array with named key
- multidimensional array -> array containing one or more array
 */

 $cars = array("Volvo", "BMW", "Toyota");
 var_dump($cars);

 echo "----------------------------------------\n";
 echo "Array Item -> can be of any data type\n";

 // function 
 function myFunction(){
    echo "This text comes from this function \n";
 }

echo "This array item contain 4 different data type \n";
$arrayItems = array("Volvo", 14, ["red", "green"], myFunction());
$arrayItems[3];

echo "-------------------------------------\n";
echo "Array Function \n";
echo "number of cars array : ". count($cars) . "\n";

echo "-------------------------------------------------\n";
echo "php index array \n";
// by default index array first array is start in index 0, and second array in index 1 etc
$vehicle = array("Motor", "Bycycle", "Car", "Truck", "Bus");

var_dump($vehicle);
echo "\n";

// access index in vehicle array in first array item 
echo $vehicle[0]. "\n";
echo "\n";

// change value of an index array use index number
$vehicle[0] = "MotorCycle";
var_dump($vehicle);

?>