<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;

$num1 = 20;
$num2 = 10;
// basic math operations
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;
// assignment operators

$num3 = 10;
// $num3 = $num3 + 10;
$num3 /= 2;


// build-in php functions

//random number

$output = rand(1, 10);

//round number

$output = round(2.4);

// ceil number

$output = ceil(2.4);

//floor number

$output = floor(2.6);

// "square" sqrt number

$output = sqrt(16);

// pi number

$output = pi();

// "absolute" abs number

$output = abs(-100);

// max number

$output = max(1, 2, 3, 4, 5);

// min number

$output = min(1, 2, 3, 4, 5);

$output = number_format(1234567.199312, 2, '.', ',');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>