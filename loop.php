<?php
/*
Loops -> are used to execute block of code over and over again
as long as certain number condition is true;

4 types following loop : 
while
do...while 
for
foreach
*/

// while loop -> loop throught a block of code as long as the specific condition true.
$i = 1;
while($i <= 9){
    echo "number : " .$i. "\n";
    $i++;
}
echo "----------------------------\n";
$x = 10;
while($x >= 2){
    echo "number : " .$x. "\n";
    $x--;
}

echo "\n";
// while in the break statement
echo "break while statement\n";
$y = 1;
while($y < 6){
    if($y == 3) break;
    echo "nomor :".$y."\n";
    $y++;
};

echo "\n";
$numericalNumber=1;
// make a continue while loop 
while($numericalNumber < 6){
    $numericalNumber++;
    if($numericalNumber == 3);
    echo "ke : ".$numericalNumber. "\n";
}

echo "\n";
#
while($y < 6):
    echo $y."\n";
    $y++;
endwhile;

$number = 10;
while($number<=100){
    echo "increment by : ".$number."\n";
    $number+=10;
};
echo "\n";

// do...while loop -> loop throught of block of code once and then repeat the loop as long as the specific condition true
echo "do...while loop \n";

$a = 1;

do{
    echo "do while : ".$a. "\n";
    $a++;
} while($a <= 6);

// do while loop can execute once, even if the condition is false
$b = 8;
do{
    echo "once : ".$b;
    $b++;
} while($b < 6);

echo "\n";

echo "make a break \n";
$c = 1;

do{
    if($c == 5) break;
    echo "ke :" . $c . "\n";
    $c++;
} while($c < 10);

echo "make a continue in d \n";

$d = 0;
do{
    $d++;
    if($d == 5) continue;
    echo "number : " .$d. "\n";
} while($d < 10);


// php for loop -> loop throught of block code as a specified number times
echo "--------------------------------\n";
echo "php for loop\n";
/*
for(expression1, expression2, expression3){
    // block of code;
}
*/

for($x=0; $x<=10; $x++){
    echo "Number of : $x \n";
}

echo "with break in step5\n";
for($y=0; $y<10; $y++){
    if($y == 5) break;
    echo "in : $y \n";
}

echo "with the continue in step5\n";
for($z=0; $z<=10; $z++){
    if($z==5) continue;
    echo "continue : $z\n";
}

echo "increment by 10";
for($j=0; $j<=100; $j+=10){
    echo "increment by 10 in : $j\n";
}
echo "\n";


// php foreach loop -> loop throught block of code for each element in array or each property in object

// foreach loop is to loop throught item in array

// declare an array
$colors = array("red", "green", "blue", "yellow", "black", "pink", "purple");

foreach($colors as $x){
    echo "color : $x \n";
};
echo "\n";

echo "list of members\n";
$members = array("Peter"=>"20", "John"=>"25", "Steven"=>"40", "kenedy"=>"50");
foreach($members as $people=>$age){
    echo "Name : $people, Age : $age\n";
};

// foreach loop in object 
class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "volvo");
foreach($myCar as $x => $y){
    echo "$y : $x\n";
}

echo "-----------------------------------------\n";
echo "foreach with break statement \n";

$cars = array("BMW", "Toyota", "Mazda", "Mercedez", "Tesla", "Ford");
foreach($cars as $vehicle){
    if($vehicle == "Mazda") break;
    echo "$vehicle \n";
}

echo "-------------------------\n";
echo "foreach with continue\n";
foreach($cars as $motor){
    if($motor == "Mercedez") continue;
    echo "$motor \n";
}

echo "---------------------------------------\n";
echo "array item with changes \n";
foreach($cars as $mobil){
    if($mobil == "Mercedez") $mobil = "Mercy";
    if($mobil == "Toyota") $mobil = "Kijang Inova";
    echo "mobil : $mobil\n";    
}
echo "\n";

var_dump($cars);

$members = array("steven", "john", "martin", "nichole", "james");

foreach($members as $personal):
    echo "name member : $personal \n";
endforeach;

echo "-------------------------\n";
foreach($members as $personel){
    if($personel == "martin"){
        break;
    }
    echo $personel."\n";
}
echo "----------------------------------";
?>