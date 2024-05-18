<?php
$age = 18;
// If statement

if ($age >= 18) {
    echo "You are eligible to vote";    
}
 echo '<br>';
// If-Else

if ($age >= 18) {
    echo "You are eligible to vote";    
} else {
    echo "You are not eligible to vote";
} 
echo '<br>';

// Nested if statement

if ($age >= 18) {
    echo "You are eligible to vote";    
} else {
    if ($age < 18) {
        echo "You are not eligible to vote";
    } else {
        echo "Invalid age";
    }
}
echo '<br>';  

// If-Else-If

if ($age >= 18) {
    echo "You are eligible to vote";    
} else if ($age < 18) {
    echo "You are not eligible to vote";
} else {
    echo "Invalid age";
}

