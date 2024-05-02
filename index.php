<?php
$output = null;

$ids = [11, 23, 33, 42, 53, 641, 72, 84, 95, 101];
$users = [ 'user2', 'user1', 'user3', 'user5', 'user4'];

$output = count($ids) === count($users) ? 'The arrays have the same length' : 'The arrays do not have the same length';

// sort
sort($ids);
sort($users);

//push

array_push($ids, 111);
array_push($users, 'user6');

//pop removing last element

array_pop($ids);
array_pop($users);

//array_shift removing first element

array_shift($ids);
array_shift($users);

//array_unshift adding element at the beginning

array_unshift($ids, 1);
array_unshift($users, 'user0');

//slice array 

$ids = array_slice($ids, 0, 5); // 5 is the length of the array

// splice array

array_splice($users, 0, 1, 'new ID'); // 0 is the starting index, 1 is the number of elements to remove, 'new ID' is the element to add

// sum of all elements in the array

$output = 'sum of ids: ' . array_sum($ids);

// explode 

$tags = 'php,javascript,css,html';
$tagsArray = explode(',', $tags);

//var_dump($tagsArray);

//implode 

$output = implode(' - ', $tagsArray);



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
            <h2 class="text-xl font-semibold my-4">IDs array:</h2>
            <p>
                <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users array:</h2>
            <p>
                <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>