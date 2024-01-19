<?php 
// PHP String 
$x = "john";
$y = " Hello World !";
echo "Hello";
echo 'Hello';
echo "Hello $x";
echo 'Hello $x';
echo "<hr>";

// strlen() -> to count length of character
echo strlen("Hello World"). "<br>";

// str_word_count() -> to count length of word
echo str_word_count("hello world"). "<br>";

// strpos() -> search specific text with string
echo strpos("Hello World", "World"). "<br>";

// php modify string 

// strtoupper() -> function 
echo strtoupper($x). "<br>";

// strtolower() -> function return string to lowercase
echo strtolower($y). "<br>";

// str_replace() -> function replace some character with other character
echo str_replace("World", "Steven", $y). "<br>";

//  strrev() -> function to reverse a string
echo strrev($y). "<br>";

// trim() -> function to remove whitespce
echo trim($y). "<br>";

// explode() -> function split string into array
$z = explode(" ", $y);
print_r($z). "<br>";
echo "<hr>";

// String concatenation use . to concatenate
$concatenate = $y . $x;
echo $concatenate. "<br>";
echo "$y $x";

// Escape character
$escapeCharacter = "We are want they a \"viking\" man";
echo $escapeCharacter;
?>