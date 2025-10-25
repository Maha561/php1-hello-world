

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// looping statement


//🌀 1. While Loop

$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

/* 🔹 Explanation:

Condition is checked first ($x <= 5).

Then executes the block, increments $x, and repeats until condition is false */

// 🔁 2. Do...While Loop

echo " do while loop <br>";

$y = 1;

do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);

/* 🔹 Difference:

Executes at least once, even if the condition is false (because condition is checked after the loop body). */

// for loop

echo " for loop <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "The number is: $i <br>";
}

// 🔹 Structure:
//for (initialization; condition; increment/decrement)

echo " 🔄 4. Foreach Loop (for arrays) <br>";

$colors = array("Red", "Green", "Blue");

foreach ($colors as $value) {
    echo "$value <br>";
}

// 🔹 Used for: arrays or associative arrays
//🔹 It automatically loops through all array elements.





?>
    

</body>
</html>