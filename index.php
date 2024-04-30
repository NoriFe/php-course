<?php
$output = null;
$output = date('Y-m-d H:i:s'); // get current date and time
$output = date('Y', 936345600); // get year from timestamp
$output = date('Y-m-d H:i:s', strtotime('2020-12-31 23:59:59')); // convert string to timestamp
$output = date('Y-m-d H:i:s', strtotime('tomorrow')); // convert string to timestamp
$output = date('Y-m-d H:i:s', strtotime('next Monday')); // convert string to timestamp
$output = date('m'); // get month
$output = date('d'); // get day
$output = date('Y'); // get year
$output = date('l'); // get day of the week
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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>