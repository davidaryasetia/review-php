<?php 
/*
php function : 
- A function is a block of statement that can be used repeadtly in a program
- A function will not execute automatically when page load
- A function will execute by a call to a function 
*/

// Create a Function 
function myMessage(){
    echo "Hello World !\n";
}

// call a function 
myMessage();
echo "-------------------------------\n";

// make an argument in the function 
echo "make a function with argument \n";
function familyName($fname){
    echo "$fname refnes \n";
}

familyName("Jani");
familyName("Diana");
familyName("Stale");
familyName("Kai Jim");
familyName("lianquue");

echo "---------------------------------------\n";
echo "make a function with 2 argument \n";
function family($name, $birth){
    echo "$name Refness. Was Born in $birth.\n";
}

family("Janes", 1975);
family("Diana", 1945);
family("James", 1990);
family("Mario", 1987);
family("Steven", 1990);

echo "---------------------------------------\n";
echo "php function with default argument value \n";
/*
Default parameter function if we call the function without argument
it takes the default values
 */

 function setHeight($minHeight = 50){
    echo "The height is : $minHeight \n";
 }

 setHeight(350);
 setHeight();
 setHeight(100);
 setHeight(200);
 setHeight(250);
 

 echo "--------------------------------------------\n";
 echo "php function to make a return a value \n";
 function sum($x, $y){
    $z = $x + $y;
    return $z;
 }

 echo "5 + 10 = " .sum(5, 10). "\n";
 echo "10 + 10 = " .sum(10, 10). "\n";
 echo "20 + 25 = " .sum(20, 25). "\n";

 echo "-------------------------------------\n";
 echo "passing argument by a reference \n";
 function add_five(&$value){
    $value += 5;
 }
 
 $num = 2;
 add_five($num);
 echo $num;
 
 echo "-----------------------------------\n";
 echo "variadic function \n";

 function sumMyNumbers(...$x){
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++){
        $n += $x[$i];
    }
    return $n;
 }
 
 $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
 echo $a;

 echo "-----------------------------------\n";
 echo "php is a loosely typed language \n";
 echo "declare a type data in parameter function \n";

 function addNumbers(int $a, int $b){
    return $a + $b;
 }

 echo addNumbers(5, 5);

 echo "\n";
 echo "set return type declaration \n";

 function floatCalculate(float $x1, float $x2) : float {
 return $x1 + $x2;
 }
 
 echo floatCalculate(1.2, 1.5);

 echo "\n";
 echo "return integer declaration \n";
 function integerCalculate(float $a, float $b) : int {
 return (int) ($a + $b);
 }

 echo integerCalculate(1.2, 1.2);

?>