<?php
/**
 * php constant -> they are identifier name for a simple value, 
 * and cannot be change
 */

 // define(name, value, case-insensitive)
 define("GREETING", "Welcome to the W3SCHOOL!\n");
 echo GREETING;

 // create constant keywoard
 const myCar = "Volvonn\n";
 echo myCar;

 // make a php constant array
 define("cars", [
    "BMW", "Toyota", "Volvo", "Romeo"
 ]);
 echo cars[3]."\n";

 // make a function to call constant 
 function defineVariable(){
    echo GREETING."\n";
 }
 function constantVariable(){
    echo myCar."\n";
 }
 defineVariable();
 constantVariable();

 // php magic constant 
 echo "php magic constant\n";
 echo "this file in directory : " . __DIR__ ."\n";
 echo "this file is : " . __FILE__ . "\n";
 
 // __FUNCTION__
 function myFunction(){
    return __FUNCTION__;
 }
 echo myFunction(). "\n";

 echo "This code in line : " . __LINE__ . "\n";
?>