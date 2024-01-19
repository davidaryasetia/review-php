<?php
// php number -> integer, float, number string, infinity, nan

$a = 5;
$b = 3.4;
$c = "25";
$d = 1.9e411;
$e = acos(8);

var_dump($a);
var_dump($b);
var_dump($c);

// Check if type variable is integer
echo "is int?\n";
var_dump(is_int($a));
var_dump(is_int($b));
echo "------------------------\n";
// Check if type data is float
echo "is float?\n";
var_dump(is_float($a));
var_dump(is_float($b));
echo "is infinite? \n";
var_dump(is_infinite($d));
var_dump(is_finite($d));
var_dump($e);
var_dump(is_nan($e));
echo "numerical string?\n";
var_dump(is_numeric($a));
var_dump(is_numeric($b));
var_dump(is_numeric($c));
var_dump(is_numeric($d));

echo "---------------------------------\n";
echo "integer cast\n";
// cast/convert float to int
$floating = 253.32;
$int_cast = (int)$floating;
echo "floating to int :". $int_cast . "\n";

// cast/convert numerical string to int
$numericalString = "245";
$int_cast = (int)$numericalString;
echo "Numerical to int" .$int_cast. "\n"; 
echo "---------------------------------\n";

// php Mathematical math function 

// pi() -> function return value of pi 
echo "pi : ".(pi())."\n";

// min() max() -> function to find lowest or highest value of number
echo(min(0, 140, 40, -120, -50)). "\n";
echo(max(0, 140, 40, -120, -50)). "\n";

// abs() -> function return absolute positive number
echo(abs(-5))."\n";

// sqrt() -> function to return square of root number
echo(sqrt(64))."\n";

// round() -> function round floating-point number to its neares
echo(round(0.6))."\n";

// rand() -> function to generate a random number
echo(rand(0,10))."\n";
echo(rand(10,100))."\n";
?>