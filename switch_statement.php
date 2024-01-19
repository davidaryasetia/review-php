<?php
/*
PHP Switch Statement 

switch(expression){
    case label1:
        // code block;
        break;
    case label2:
        // code block;
        break;
    case label3:
        //code block;
        break;
    default:
        //code block;
}
*/

$color = "red";

switch($color){
    case "red":
        echo "your favorite color is red";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    case "yello":
        echo "your favorite color is yellow";
        break;
    default: 
        echo "your favorite color is not blue green yellow";
};


echo "\n";
echo "the default keyword specifies the code run if there is no case mathch\n";

$number = 8;

switch($number){
    case 1:
        echo "sunday";
        break;
    case 2: 
        echo "monday";
        break;
    case 3:
        echo "tuesday";
        break;
    case 4:
        echo "wednesday";
        break;
    case 5:
        echo "thursday";
        break;
    case 6:
        echo "friday";
        break;
    case 7:
        echo "satuday";
        break;
    default:
        echo "there is no day in day 8";
};

echo "\n";
echo "make a multiple case in switch case code block\n";

$x = 3;
switch($x){
    case 1: 
    case 2: 
    case 3: 
    case 4: 
    case 5:
    case 6: 
    case 7:
        echo "This text number inside with case 1234567";
    break;
    case 8:
    case 9: 
    case 10: 
    case 11:
        echo "this text number inside with case 8,9,10,11";
    break;
    default: 
        echo "This function is either anyway";
};



?>