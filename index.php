<?php

$names = array("John", "Jane", "Joe", "Jill");
$numbers = [1, 2, 3, 4, 5]; 



function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';  // <pre> is a tag in HTML that defines preformatted text. Text in a <pre> element is displayed in a fixed-width font, and the text preserves both spaces and line breaks.

}

// inspect($numbers); //calling the function inspect and passing the array $numbres as an argument

// print_r($names); //print_r — Prints human-readable information about a variable

// echo $names[1]; //prints Jane

// echo $numbers[3]; //prints 4

// echo $names[4]; //prints error because the index 4 does not exist in the array $names
// adding an element to an array

$numbers[] = 100; //adds 100 to the end of the array

$numbers[3] = 13333; //changes the value of the element at index 3 to 13333

inspect($numbers); //prints array(2) { [0]=> int(100) [1]=> int(200) }





?>