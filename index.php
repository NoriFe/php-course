<?php
$output = null;

$cars = [
  ['Toyota', 'Camry'],
  ['Honda', 'Accord'],
  ['Ford', 'Fusion'],
  ['Chevrolet', 'Malibu'],
  ['Nissan', 'Altima']
];

$output = $cars[0][1];

$cars[] = ['BMW', 'M3']; // Add new element to the array

$users = [
['name' => 'nori', 'email' => 'nori@test.com', 'age' => 30,  'password' => '123456'],
['name' => 'troli', 'email' => 'troli@test.com', 'age' => 40,  'password' => '123456'],
['name' => 'boli', 'email' => 'boli@test.com', 'age' => 56,  'password' => '123456'],

];

$output = $users[0]['name']; // will print name of the first user

array_push($users, ['name' => 'moli', 'email' => 'moli@test.com', 'age' => 56,  'password' => '123456']); // Add new element to the array

array_pop($users); // Remove the last element from the array
array_shift($users); // Remove the first element from the array
unset($users[0]); // Remove the element from the array by index
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
      <p class="text-xl"><?= $output ?></p>
      <p>
        <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>