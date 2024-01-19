<?php
/**
 * Datatype php 
 * String, Integer, Float, Boolean, Array, Object, Null, Resource
 */

 // make a class 
 class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My Car is a " .$this->color. " " .$this->model. " ";
    }
 }

 
 

 $x = 463747;
 $y = 50.234;
 $text = "Hello World";
 $choice = true;
 $cars = array("bmw", "volvo", "audi");
 $nullValue = null;
 // make object and call class
 $myCar = new Car("Red", "Volvo");  
 var_dump($x);

 $x = (string) $x;
 var_dump($x);
 var_dump($text);
 var_dump($y);
 var_dump($choice);
 var_dump($cars);
 var_dump($nullValue);
  
?>