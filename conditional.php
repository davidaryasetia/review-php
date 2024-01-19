<?php
// php conditional statement (if)

/*
if(condition){
    // code excecuted when condition is true
}
*/
$a = 100;
$b = 100;
$c = 7;
$x = 14;
if($x < 20){
    echo "have a goday\n";
}

// equal operator ==
if($a == $b){
    echo "$a is an equal of $b\n";
}

// identical operator === 
if($a === $b){
    echo "$a is indentical of $b\n";
}

// not equal != / <>
if($x != $b){
    echo "$x is not equal from $b\n";
}

// not identical 
if($x !== $b){
    echo "$x is not identical from $b\n";
}

echo "-------------------------------\n";
echo "Logical operator check more than one condition\n";

// && -> both condition must be true
if($a > $x && $x < $b){
    echo "Both are $a > $x && $x < $b is true\n";
}

// || -> true if either condition is true
if($a > $x || $a < $X){
    echo "either one of condition are true\n";
}

// $c = 7
if($a == 1 || $a == 2 || $a == 3 || $c == 4 || $c == 5 || $c == 5 || $c == 6 || $c == 7){
    echo "either one of this condition is $a true\n";
}

// Make a XOR condition 
if($a > $c XOR $c > $b){
    echo "either this condition true, but not both. using xor conditional\n";
}

echo "------------------------------------------------------------------\n";
// php if else statement
echo "php if else statement :\n";
/*
 if(condition){
    // code to be executed when condition is true
 } else {
    // code to be executed when another condition is false
 }
 */

 $time = date("H");
 if($time < 1){
    echo "Have a goday\n";
 } else {
    echo "Have a godnight\n";
 }

 // if elseif else statement
 /*
 if(condition){
    code to be executed when this condition is true
 } elseif(condition){
    code to be executed when first condition is false and this condition is true
 } else {
    code to be executed when all condition is false
 }
 */

 echo "time now :". $time , "\n";
 if($time < 10){
    echo "Have a good morning \n";
 } elseif($time < 20){
    echo "Have a gooday \n";
 } else {
    echo "Have a good night\n";
 }

 echo "--------------------------------------------------\n";
 echo "Shorthand if statement to write a shorter code \n";

 $number = 4;
 if($number < 10) $numberB = "Hello";
 if($number == 4) $numberC = "Same";
 echo $numberB ."\n";
 echo $numberC."\n";

 echo "-------------------------------------------------------\n";
 echo "Shorthand if else \n";

 // make a ternary operator 
 $result = $number > 10 ? "benar" : "salah";
 $result_2 = $number < 10 ? "benar" : "salah";
 echo $result. "\n";
 echo $result_2. "\n";

 echo "php nested if statement \n";

 if($number > 2){
    echo "This parent if number above 2";
    if($number > 10){
        echo " and this child if number above 10";
    } else {
        echo " and this if number less then 10";
    }
 };
 
?>