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

echo "access first item array of vehicle \n";
echo $vehicle[0]."\n";

echo "change value in first index array to motorcycle \n";
$vehicle[0] = "Motorcycle";
var_dump($vehicle);
echo "\n after change : $vehicle[0] ";

echo "\n---------------------------------------------------------\n";
echo "loop throught in index array \n";

// make foreach 
foreach($vehicle as $x){
    echo "vehicle mode : $x \n";
}

echo "\nmake foreach endforeach \n";
foreach($vehicle as $y): 
    echo "Vehicle : $y \n";
endforeach;
echo "\n";


// Make a array_push() -> function to add new item in array
$garage = array("Motorcycle", "Motorcross", "Car", "Bus", "Truck");
var_dump($garage);

echo "Add a new item array use array_push()\n";
array_push($garage, "Tronton");
var_dump($garage);

echo "------------------------------------------------------\n";

$motors[4] = "Yamaha";
$motors[5] = "Zuzki";
$motors[9] = "Honda";
$motors[15] = "Piaggio";
$motors[10] = "BMW";

var_dump($motors);

echo "Add new items in array motors\n";
array_push($motors, "Chery");

echo "----------------------------------------------\n";
var_dump($motors);
echo "----------------------------------------------\n";


// php associative array 

echo "Declare of php associative array \n";

$car = array("brand"=>"Ford", "Model"=>"Mustang x", "Years"=>1995);
echo "result of associative array : \n";
var_dump($car);

echo "Access associative array \n";
echo "Model Car Ford : ". $car["Model"] . "\n";

echo "Change value of array items \n";
$car["Model"] = "Fiesta";
var_dump($car);
echo "Model ford after change : ". $car["Model"] . "\n\n";

// loop associative array use foreach loop 
echo "loop throught in associative array \n";
foreach($car as $carKey => $carValue){
    echo $carKey ." : " . $carValue ."\n";
}

echo "\n";
echo "loop make foreach endforeach\n";
foreach($car as $carName=>$carValue):
    echo $carName ." : " . $carValue . "\n";
endforeach;


echo "-----------------------------------------\n";
echo "Create Array \n";

$motor = array("Yamaha", "Zuzuki", "Honda", "BMW");

echo "using bracket syntax[]\n";
$food = ["Burger", "Pizza", "Donuts", "HotDog"];
var_dump($food);


// Multiples lines array 
$drink = [
    "Fanta", 
    "Coca-Cola", 
    "Sprite", 
    "Cherry"
];

$drinking = [
    "Fanta", 
    "Coca-cola", 
    "Sprite", 
    "Cherry", 
];

echo "Define an Array key \n";

$water = [
    0 => "Fanta", 
    1 => "Coca-cola", 
    2 => "Sprite", 
    3 => "Cherry",
];

$brand = [
    "brandType" => "Water", 
    "brandMerk" => "Danone", 
    "Type" => "Aqua", 
    "pricing" => 32000, 
    "Quantity" => "1 box",   
];

echo "\nLooping a brand associative array \n";
foreach($brand as $brandKey => $brandValue) :
    echo $brandKey . " : " . $brandValue . "\n";
endforeach;


// declare empty array for index an associative array 

// for index array
$motors = [];
$motors[0] = "Yamaha";
$motors[1] = "Honda";
$motors[2] = "Suzuki";
$motors[3] = "BMW";


// for associative array 
$myMotor = [];
$myMotor["Brand"] = "Honda";
$myMotor["Model"] = "Vario";
$myMotor["color"] = "Black";
$myMotor["Year"] = 2020;

echo "Information in array myMotor : \n"; 
var_dump($myMotor);

echo "\nInformation Motor :\n";
foreach($myMotor as $motorKey => $motorValue): 
    echo $motorKey . " : " . $motorValue . "\n";
endforeach;

echo "----------------------------------------------\n";
// mixing myArr

$myArr = [];
$myArr[0] = "Bananas";
$myArr[1] = "Apples";
$myArr["Type"] = "Fruit";

echo "----------------------------------------------------\n";
echo "Access Array : \n";

echo $water[2]. "\n";

echo "Access associative array from myMotor Array : ". $myMotor["Brand"] ."\n";

// access item can make double or single quotes
echo $myMotor['Brand']. " " . $myMotor["Model"] . "\n";

echo "---------------------------------------------------\n";
echo "Execute function item \n";

function arrayFunction(){
    echo "I come from function \n";
}

$indexArray = array("string", 15, arrayFunction());
// call a function inside array $
var_dump($indexArray[2]);
// $indexArray[2];
echo "\n"; 
// make associative array contain function 
$associateArray = array("text"=>"string", "age"=>15, "message"=>arrayFunction());
var_dump($associateArray["message"]);
echo $associateArray["message"];

// Loop Associate Array 
foreach($myMotor as $key => $value): 
    echo $key. " : " . $value . "\n";
endforeach;

echo "\n";
// loop index array 
foreach($drinking as $value): 
    echo $value . "\n";
endforeach;


echo "-----------------------------------\n";
echo "Update Array \n";
var_dump($drinking);
$drinking[0] = "Fanta Merah";

var_dump($drinking);
echo "\n";

var_dump($myMotor);
// update array in associative array 
$myMotor["Model"] = "Beat";
$myMotor["color"] = "Red";
var_dump($myMotor);

foreach($myMotor as $vehicle){
    echo $vehicle. "\n";
}

echo "--------------------------------------------------\n";
echo "Change array using loop \n";

$myVehicle = array("Toyota", "Honda", "Suzuki", "Hyunda");

// make loop to change all array 
foreach($myVehicle as &$vehicle){
    $vehicle = "Mercedez";
}

// make unset function to change all 
unset($vehicle);
echo "-----------------------------------\n";
var_dump($myVehicle);
echo "\n";
foreach($myVehicle as $thisVehicle){
    echo $thisVehicle . "\n";
}

echo "----------------------------------------\n";
echo "Remove item in existing item from array unset()\n";

// unset() function to remove existing item in array 
$myDrinking = array("Fanta", "Coca-Cola", "Sprite", "krating daeng");
var_dump($myDrinking);

// delete in second item array is Coca-Cola
unset($myDrinking[1]);

echo "Result after delete second array : \n";
var_dump($myDrinking);

// delete multiple items in array 
unset($myDrinking[2], $myDrinking[3]);

// show array 
var_dump($myDrinking);


echo "-----------------------------------------------\n";
/*
Use array_splice()
 */

 $Component = array("Component1", "Component2", "Component3", "Component4", "Component5");
 array_splice($Component, 0, 2);
 var_dump($Component);

 echo "Remove item from associate array \n";
 $AssociativeArray = [
    "key1" => "value1", 
    "key2" => "value2",
    "key3" => "value3", 
    "key4" => "value4", 
    "key5" => "value5", 
 ];

 echo "Remove associative array using key of name \n";
 unset($AssociativeArray["key1"]);
 unset($AssociativeArray["key3"], $AssociativeArray["key4"], $AssociativeArray["key5"]);

 var_dump($AssociativeArray);
 echo "\n";

 foreach($AssociativeArray as $ArrayKey => $ArrayValue){
    echo $ArrayKey . " : " . $ArrayValue . "\n";
 }
?>