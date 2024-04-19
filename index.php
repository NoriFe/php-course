<?php
    $number1 = 5;
    $number2 = 10;
    $number3 = '15';
    $fruit = 'apple';
    $bool1 = true;
    $bool2 = false;
    $null = null;

// implicit Conversion
    $sum = $number1 + $number2;
    $sum = $number1 + $number3; // int (string to int)
    $sum = $number3 + $number3; // int (string to int)       
    $sum = $number1 . $number2; // string (int to string)
    // $sum = $number1 + $apple; // error
    $sum = $number1 + $bool1; // int (bool to int) =6
    $sum = $number1 + $bool2; // int (bool to int) =5
    $sum = $number1 + $null; // int (null to int) =5

    // Explicit Conversion

    $sum = (string) $number1; 
    $sum = (int) $number3; 
    $sum = (bool) $number1; // when 0 is will be false otherwise true


    var_dump($sum);
?>