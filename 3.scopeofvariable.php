
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
LOCAL , GLOBAL , AND STATIC VARIABLE IN php </h2>

<?php

// local variable

$x = 5;
$y = 10;

// Function demonstrating local, global, and static variables

function myTest() {
    // Local variable
    $num = 11;
    echo "Local variable num = $num<br>";

    // Static variable
    static $z = 0;
    $z++;
    echo "Static variable z = $z<br>";

    // Accessing global variables
    global $x, $y;
    $y = $x + $y;
}

// Call the function twice
myTest();
myTest();

// Display global variables outside function
echo "Global x + y = $y<br>";





 



?>
</body>
</html>