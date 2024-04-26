<?php
$output = null;
$string = 'hello You';

$output = strlen($string); // counts the number of characters in a string
$output = str_word_count($string); // counts the number of words in a string  
$output = strpos($string, 'You'); // finds the position of the first occurrence of a substring in a string
$output = str_replace('You', 'World', $string); // replaces some characters with some other characters in a string
$output = strtoupper($string); // converts a string to uppercase
$output = strtolower($string); // converts a string to lowercase


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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>