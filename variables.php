<?php
$x = 10; // example declare a global scope
$y = 5;
$z = "John";
$a = $b = $c = "Nanas";
$txt = "W3SCHOL";

// make a function to access global variable 
function myTest(){
    $number = 100;
    // use this function will generate an error 
    echo "Variable number inside this function is :" .$number. "<br>";
}

// make a function global keywoard
function globalKeywoard(){
    global $x, $y;
    $y = $x + $y;
}

// $GLOBALS['index']
function globalArray(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['x'];
}

function staticVariable(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
globalKeywoard();
globalArray();
echo "y is : " .$y;
echo "<br>";
// echo "This number access outside number" .$number. "<br>"; // access variable $number in inside function will be error
echo "I Love " . $txt . "!";
echo $x + $y;
echo "" . $z . "<br>";
echo "" .$a. ", " .$b. ", " .$c. "<br>";
echo "<hr>";
staticVariable();
staticVariable();
staticVariable();
staticVariable();
staticVariable();
staticVariable();
staticVariable();
echo "<br>";


// get the data type 
echo "" . var_dump($x) . "<br>";
echo "" . var_dump($y) . "<br>";
echo "" . var_dump($z) . "<br>";
echo "" .var_dump($txt) . "<br>";
echo "" .var_dump(5). "<br>";
echo "" .var_dump("Jonathan"). "<br>";
echo "" .var_dump(3.14). "<br>";

echo "<br>";
echo "<hr>";
?>