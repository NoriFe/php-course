<?php
// String 
$name = "Norbert";
var_dump($name);
echo "<br>";

// Integer
$age = 20;
$age2 = "20";
var_dump($age);
echo "<br>";
var_dump($age2);
echo "<br>";

// Float
$height = 1.75;
var_dump($height);
echo "<br>";
$height2 = 4;
var_dump($height2);
echo "<br>";
// Boolean
$male = true;
var_dump($male);
echo "<br>";
// Array
$fruits = ["Apple", "Banana", "Orange"];
var_dump($fruits);
echo "<br>";
// Object
$car = new stdClass();
var_dump($car);
echo "<br>";
// NULL
$bike = NULL;
var_dump($bike);
echo "<br>";
// Resource
$file = fopen("sample.txt", "r");
var_dump($file);

?>